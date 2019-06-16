<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GenericBoardTeamReference Version v2018_6
 *
 * Model for GenericBoardTeamReference
 *
 * @property Metadata $_info
 * @property boolean $isProjectTeamFlag
 * @property integer $id
 * @property string $name
 */
class GenericBoardTeamReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'isProjectTeamFlag' => 'boolean',
        'name' => 'string'
    ];
}