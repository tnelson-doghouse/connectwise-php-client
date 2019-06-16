<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportTransactionTaxLevel Version v2018_5
 *
 * Model for GLExportTransactionTaxLevel
 *
 * @property float $taxAmount
 * @property float $taxableAmount
 * @property integer $taxLevel
 * @property string $taxCodeXref
 */
class GLExportTransactionTaxLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxAmount' => 'float',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
        'taxableAmount' => 'float'
    ];
}