<?php

namespace Spinen\ConnectWise\Models\v2019_1\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeSheetReference Version v2019_1
 *
 * Model for TimeSheetReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class TimeSheetReference extends Model
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
