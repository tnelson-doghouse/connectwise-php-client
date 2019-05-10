<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedProcurementTaxableLevel Version v2019_1
 * 
 * Model for UnpostedProcurementTaxableLevel
 *
 * @property integer $id
 * @property integer $taxLevel
 * @property string $taxCodeXref
 * @property float $taxAmount
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class UnpostedProcurementTaxableLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxLevel' => 'integer',
        'taxCodeXref' => 'string',
        'taxAmount' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
