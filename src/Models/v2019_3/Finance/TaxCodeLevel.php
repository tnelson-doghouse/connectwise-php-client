<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeLevel Version v2019_3
 * 
 * Model for TaxCodeLevel
 *
 * @property integer $id
 * @property integer $taxLevel
 * @property float $taxRate
 * @property string $rateType
 * @property float $taxableMax
 * @property string $caption
 * @property string $taxCodeXref
 * @property string $agencyXref
 * @property boolean $taxServicesFlag
 * @property boolean $taxExpensesFlag
 * @property boolean $taxProductsFlag
 * @property boolean $singleUnitFlag
 * @property float $singleUnitMinimum
 * @property float $singleUnitMaximum
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class TaxCodeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxLevel' => 'integer',
        'taxRate' => 'float',
        'rateType' => 'string',
        'taxableMax' => 'float',
        'caption' => 'string',
        'taxCodeXref' => 'string',
        'agencyXref' => 'string',
        'taxServicesFlag' => 'boolean',
        'taxExpensesFlag' => 'boolean',
        'taxProductsFlag' => 'boolean',
        'singleUnitFlag' => 'boolean',
        'singleUnitMinimum' => 'float',
        'singleUnitMaximum' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
