<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Country Version v2019_2
 *
 * Model for Country
 *
 * @property AddressFormatReference $addressFormat
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property integer $zipMinimumLength
 * @property string $cityCaption
 * @property string $countryCode
 * @property string $dialingPrefix
 * @property string $localizationCaptionOne
 * @property string $localizationValueOne
 * @property string $name
 * @property string $stateCaption
 * @property string $zipCaption
 */
class Country extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addressFormat' => AddressFormatReference::class,
        'cityCaption' => 'string',
        'countryCode' => 'string',
        'currency' => CurrencyReference::class,
        'defaultFlag' => 'boolean',
        'dialingPrefix' => 'string',
        'id' => 'integer',
        'localizationCaptionOne' => 'string',
        'localizationValueOne' => 'string',
        'name' => 'string',
        'stateCaption' => 'string',
        'zipCaption' => 'string',
        'zipMinimumLength' => 'integer'
    ];
}
