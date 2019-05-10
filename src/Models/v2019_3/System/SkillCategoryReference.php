<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SkillCategoryReference Version v2019_3
 *
 * Model for SkillCategoryReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SkillCategoryReference extends Model
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
