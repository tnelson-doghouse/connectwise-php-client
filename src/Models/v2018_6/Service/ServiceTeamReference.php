<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeamReference Version v2018_6
 *
 * Model for ServiceTeamReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}