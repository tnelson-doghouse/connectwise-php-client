<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleSpanReference Version v2019_2
 *
 * Model for ScheduleSpanReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class ScheduleSpanReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string'
    ];
}
