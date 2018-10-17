<?php

namespace Spinen\ConnectWise\Api;

use Exception;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use Spinen\ConnectWise\Support\Collection;
use Spinen\ConnectWise\Support\Model;
use Spinen\ConnectWise\Support\ModelResolver;

/**
 * Class Client
 *
 * @package Spinen\ConnectWise\Api
 *
 * @method array delete(string $resource, array $options = [])
 * @method array get(string $resource, array $options = [])
 * @method array head(string $resource, array $options = [])
 * @method array patch(string $resource, array $options = [])
 * @method array post(string $resource, array $options = [])
 * @method array put(string $resource, array $options = [])
 */
class Client
{
    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * Headers that needs to be used with token
     *
     * @var array
     */
    protected $headers = [];

    /**
     * Integrator username to make global calls
     *
     * @var
     */
    protected $integrator;

    /**
     * Integration password for global calls
     *
     * @var
     */
    protected $password;

    /**
     * Resolves a model for the uri
     *
     * @var ModelResolver
     */
    protected $resolver;

    /**
     * Public & private keys to log into CW
     *
     * @var Token
     */
    protected $token;

    /**
     * URL to the ConnectWise installation
     *
     * @var string
     */
    protected $url;

    /**
     * Supported verbs
     *
     * @var array
     */
    protected $verbs = [
        'delete',
        'get',
        'head',
        'put',
        'post',
        'patch',
    ];

    /**
     * Client constructor.
     *
     * @param Token         $token
     * @param Guzzle        $guzzle
     * @param ModelResolver $resolver
     */
    public function __construct(Token $token, Guzzle $guzzle, ModelResolver $resolver)
    {
        $this->token = $token;
        $this->guzzle = $guzzle;
        $this->resolver = $resolver;
    }

    /**
     * Magic method to allow short cut to the request types
     *
     * @param string $verb
     * @param array  $args
     *
     * @return array
     */
    public function __call($verb, $args)
    {
        if (count($args) < 1) {
            throw new InvalidArgumentException('Magic request methods require a resource and optional options array');
        }

        if (!in_array($verb, $this->verbs)) {
            throw new InvalidArgumentException(sprintf("Unsupported verb [%s] was requested.", $verb));
        }

        return $this->request($verb, $args[0], $args[1] ?? []);
    }

    /**
     * Adds key/value pair to the header to be sent
     *
     * @param array $header
     *
     * @return $this
     */
    public function addHeader(array $header)
    {
        foreach ($header as $key => $value) {
            $this->headers[$key] = $value;
        }

        return $this;
    }

    /**
     * Build authorization headers to send CW API
     *
     * @return array
     */
    public function buildAuth()
    {
        if ($this->token->needsRefreshing()) {
            $this->token->refresh($this);
        }

        return [
            $this->token->getUsername(),
            $this->token->getPassword(),
        ];
    }

    /**
     * Build the options to send to API
     *
     * We allays need to login with Basic Auth, so add the "auth" option for Guzzle to use when logging in.
     * Additionally, pass any headers that have been set.
     *
     * @param array $options
     *
     * @return array
     */
    public function buildOptions(array $options = [])
    {
        return array_merge_recursive($options, [
            'auth'    => $this->buildAuth(),
            'headers' => $this->getHeaders(),
        ]);
    }

    /**
     * Build the full path to the CW resource
     *
     * @param string $resource
     *
     * @return string
     */
    public function buildUri($resource)
    {
        return $this->getUrl() . ltrim($resource, '/');
    }

    /**
     * Remove all set headers
     *
     * @return $this
     */
    public function emptyHeaders()
    {
        $this->setHeaders([]);

        return $this;
    }

    /**
     * The headers to send
     *
     * When making an integrator call (expired token), then you have to only send the "x-cw-usertype" header.
     *
     * @return array
     */
    public function getHeaders()
    {
        if ($this->token->isForUser($this->integrator)) {
            return [
                'x-cw-usertype' => 'integrator',
            ];
        }

        return $this->headers;
    }

    /**
     * Expose the integrator username
     *
     * @return string
     */
    public function getIntegrator()
    {
        return $this->integrator;
    }

    /**
     * Expose the integrator password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Expose the url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url . '/v4_6_release/apis/3.0/';
    }

    /**
     * Process the error received from ConnectWise
     *
     * @param RequestException $exception
     */
    // TODO: Figure out what to really do with an error...
    /**
     * @param RequestException $exception
     */
    protected function processError(RequestException $exception)
    {
        echo Psr7\str($exception->getRequest());

        if ($exception->hasResponse()) {
            echo Psr7\str($exception->getResponse());
        }
    }

    /**
     * @param          $resource
     * @param Response $response
     *
     * @return Collection|Model|Response
     */
    protected function processResponse($resource, Response $response)
    {
        $response = (array)json_decode($response->getBody(), true);

        if ($model = $this->resolver->find($resource)) {
            $model = 'Spinen\ConnectWise\Models\\' . $model;

            if ($this->isCollection($response)) {
                $response = array_map(function ($item) use ($model) {
                    $item = new $model($item, $this);

                    return $item;
                }, $response);

                return new Collection($response);
            }

            return new $model($response, $this);
        }

        return $response;
    }

    /**
     * Make call to the resource
     *
     * @param string     $method
     * @param string     $resource
     * @param array|null $options
     *
     * @return array
     */
    protected function request($method, $resource, array $options = [])
    {
        try {
            $response = $this->guzzle->request($method, $this->buildUri($resource), $this->buildOptions($options));

            return $this->processResponse($resource, $response);
        } catch (RequestException $e) {
            $this->processError($e);
        }
    }

    /**
     * Set the headers
     *
     * There is an "addHeader" method to push a single header onto the stack.  Otherwise,this replaces the headers.
     *
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set the integrator username
     *
     * @param string $integrator
     *
     * @return $this
     */
    public function setIntegrator($integrator)
    {
        $this->integrator = $integrator;

        return $this;
    }

    /**
     * Set the integrator password
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the URL to ConnectWise
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(sprintf("The URL provided[%] is not a valid format.", $url));
        }

        $this->url = rtrim($url, '/');

        return $this;
    }

    protected function isCollection(array $array)
    {
        // Keys of the array
        $keys = array_keys($array);

        // If the array keys of the keys match the keys, then the array must
        // not be associative (e.g. the keys array looked like {0:0, 1:1...}).
        return array_keys($keys) === $keys;
    }
}
