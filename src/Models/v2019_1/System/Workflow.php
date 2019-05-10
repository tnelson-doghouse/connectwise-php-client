<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Workflow Version v2019_1
 * 
 * Model for Workflow
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\System\WorkflowTableTypeReference $tableType
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $department
 * @property boolean $activateFlag
 * @property integer $batchInterval
 * @property string $batchFrequencyUnit
 * @property Carbon\Carbon $batchLastRan
 * @property string $batchSchedule
 * @property Spinen\ConnectWise\Models\v2019_1\System\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class Workflow extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'tableType' => 'Spinen\ConnectWise\Models\v2019_1\System\WorkflowTableTypeReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'activateFlag' => 'boolean',
        'batchInterval' => 'integer',
        'batchFrequencyUnit' => 'string',
        'batchLastRan' => 'Carbon\Carbon',
        'batchSchedule' => 'string',
        'board' => 'Spinen\ConnectWise\Models\v2019_1\System\BoardReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
