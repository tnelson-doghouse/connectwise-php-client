<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ImapSetupReference Version v2019_5
 *
 * Model for ImapSetupReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ImapSetupReference extends Model
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
