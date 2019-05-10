<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConfigurationQuestion Version v2019_3
 * 
 * Model for ConfigurationQuestion
 *
 * @property integer $answerId
 * @property integer $questionId
 * @property string $question
 * @property string $answer
 * @property float $sequenceNumber
 * @property integer $numberOfDecimals
 * @property string $fieldType
 * @property boolean $requiredFlag
 */
class ConfigurationQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'answerId' => 'integer',
        'questionId' => 'integer',
        'question' => 'string',
        'answer' => 'string',
        'sequenceNumber' => 'float',
        'numberOfDecimals' => 'integer',
        'fieldType' => 'string',
        'requiredFlag' => 'boolean',
    ];
}
