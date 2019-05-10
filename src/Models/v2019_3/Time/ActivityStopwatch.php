<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStopwatch Version v2019_3
 * 
 * Model for ActivityStopwatch
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
 * @property integer $activityId
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Guid $activityMobileGuid
 * @property Spinen\ConnectWise\Models\v2019_3\Time\AgreementReference $agreement
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property Carbon\Carbon $dateEntered
 * @property Carbon\Carbon $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2019_3\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Guid $mobileGuid
 * @property string $notes
 * @property Carbon\Carbon $startTime
 * @property string $status
 * @property integer $totalPauseTime
 * @property Spinen\ConnectWise\Models\v2019_3\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_3\Time\WorkTypeReference $workType
 */
class ActivityStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
        'activityId' => 'integer',
        'activityMobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Time\Guid',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'Carbon\Carbon',
        'endTime' => 'Carbon\Carbon',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Time\Guid',
        'notes' => 'string',
        'startTime' => 'Carbon\Carbon',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Time\WorkTypeReference',
    ];
}
