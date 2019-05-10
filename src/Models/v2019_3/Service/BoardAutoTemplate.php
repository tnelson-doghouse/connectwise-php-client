<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoTemplate Version v2019_3
 *
 * Model for BoardAutoTemplate
 *
 * @property BoardReference $board
 * @property Metadata $_info
 * @property ServiceItemReference $item
 * @property ServiceSubTypeReference $subtype
 * @property ServiceTemplateReference $serviceTemplate
 * @property ServiceTypeReference $type
 * @property boolean $autoApplyFlag
 * @property integer $id
 * @property string $budgetHoursSetting
 * @property string $discussionSetting
 * @property string $documentsSetting
 * @property string $financeInformationSetting
 * @property string $internalAnalysisSetting
 * @property string $resolutionSetting
 * @property string $resourcesSetting
 * @property string $sendNotesAsEmailSetting
 * @property string $summarySetting
 * @property string $tasksSetting
 */
class BoardAutoTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'autoApplyFlag' => 'boolean',
        'board' => BoardReference::class,
        'budgetHoursSetting' => 'string',
        'discussionSetting' => 'string',
        'documentsSetting' => 'string',
        'financeInformationSetting' => 'string',
        'id' => 'integer',
        'internalAnalysisSetting' => 'string',
        'item' => ServiceItemReference::class,
        'resolutionSetting' => 'string',
        'resourcesSetting' => 'string',
        'sendNotesAsEmailSetting' => 'string',
        'serviceTemplate' => ServiceTemplateReference::class,
        'subtype' => ServiceSubTypeReference::class,
        'summarySetting' => 'string',
        'tasksSetting' => 'string',
        'type' => ServiceTypeReference::class
    ];
}
