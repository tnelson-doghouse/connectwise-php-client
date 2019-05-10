<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkType Version v2019_1
 * 
 * Model for AgreementTypeWorkType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference $workType
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property float $rate
 * @property string $rateType
 * @property string $billTime
 * @property float $hoursMin
 * @property float $hoursMax
 * @property float $roundBillHours
 * @property float $overageRate
 * @property string $overageRateType
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class AgreementTypeWorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Finance\AgreementTypeReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'rate' => 'float',
        'rateType' => 'string',
        'billTime' => 'string',
        'hoursMin' => 'float',
        'hoursMax' => 'float',
        'roundBillHours' => 'float',
        'overageRate' => 'float',
        'overageRateType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
