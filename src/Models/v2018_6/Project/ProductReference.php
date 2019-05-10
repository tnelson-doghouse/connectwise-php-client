<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductReference Version v2018_6
 *
 * Model for ProductReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $description
 */
class ProductReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'description' => 'string',
        'id' => 'integer'
    ];
}
