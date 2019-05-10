<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportCustomerTaxLevel Version v2018_5
 *
 * Model for GLExportCustomerTaxLevel
 *
 * @property float $taxRate
 * @property integer $taxLevel
 * @property string $agencyXref
 * @property string $taxCodeXref
 */
class GLExportCustomerTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'agencyXref' => 'string',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
        'taxRate' => 'float'
    ];
}
