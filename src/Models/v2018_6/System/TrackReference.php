<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class TrackReference Version v2018_6
 *
 * Required when notifyType is set to: "Attach Track"
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class TrackReference extends Model
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
