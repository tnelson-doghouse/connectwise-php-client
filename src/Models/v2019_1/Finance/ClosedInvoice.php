<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ClosedInvoice Version v2019_1
 *
 * Model for ClosedInvoice
 *
 * @property BillingStatusReference $status
 * @property Metadata $_info
 * @property integer $id
 */
class ClosedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'status' => BillingStatusReference::class
    ];
}