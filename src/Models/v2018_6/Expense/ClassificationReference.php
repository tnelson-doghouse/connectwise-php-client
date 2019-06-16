<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ClassificationReference Version v2018_6
 *
 * Model for ClassificationReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ClassificationReference extends Model
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