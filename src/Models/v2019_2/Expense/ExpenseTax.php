<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTax Version v2019_2
 * 
 * Model for ExpenseTax
 *
 * @property integer $id
 * @property float $amount
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\ExpenseTaxTypeReference $type
 */
class ExpenseTax extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'float',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Expense\ExpenseTaxTypeReference',
    ];
}
