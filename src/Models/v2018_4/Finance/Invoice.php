<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Invoice Version v2018_4
 *
 * Model for Invoice
 *
 * @property BillingStatusReference $status
 * @property BillingTermsReference $billingTerms
 * @property Carbon $date
 * @property Carbon $dueDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property CurrencyReference $currency
 * @property Metadata $_info
 * @property SiteReference $billingSite
 * @property SiteReference $shippingSite
 * @property TaxCodeReference $taxCode
 * @property array $customFields
 * @property boolean $addToBatchEmailList
 * @property boolean $downpaymentPreviouslyTaxedFlag
 * @property boolean $restrictDownpaymentFlag
 * @property boolean $specialInvoiceFlag
 * @property boolean $taxableFlag
 * @property float $agreementAmount
 * @property float $balance
 * @property float $credits
 * @property float $downpaymentApplied
 * @property float $expenseTotal
 * @property float $payments
 * @property float $previousProgressApplied
 * @property float $productTotal
 * @property float $remainingDownpayment
 * @property float $salesTax
 * @property float $serviceAdjustmentAmount
 * @property float $serviceTotal
 * @property float $subtotal
 * @property float $total
 * @property integer $applyToId
 * @property integer $departmentId
 * @property integer $emailTemplateId
 * @property integer $id
 * @property integer $locationId
 * @property integer $templateSetupId
 * @property integer $territoryId
 * @property string $adjustedBy
 * @property string $adjustmentReason
 * @property string $applyToType
 * @property string $attention
 * @property string $bottomComment
 * @property string $customerPO
 * @property string $internalNotes
 * @property string $invoiceNumber
 * @property string $reference
 * @property string $topComment
 * @property string $type
 */
class Invoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addToBatchEmailList' => 'boolean',
        'adjustedBy' => 'string',
        'adjustmentReason' => 'string',
        'agreementAmount' => 'float',
        'applyToId' => 'integer',
        'applyToType' => 'string',
        'attention' => 'string',
        'balance' => 'float',
        'billToCompany' => CompanyReference::class,
        'billingSite' => SiteReference::class,
        'billingTerms' => BillingTermsReference::class,
        'bottomComment' => 'string',
        'company' => CompanyReference::class,
        'credits' => 'float',
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerPO' => 'string',
        'date' => Carbon::class,
        'departmentId' => 'integer',
        'downpaymentApplied' => 'float',
        'downpaymentPreviouslyTaxedFlag' => 'boolean',
        'dueDate' => Carbon::class,
        'emailTemplateId' => 'integer',
        'expenseTotal' => 'float',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoiceNumber' => 'string',
        'locationId' => 'integer',
        'payments' => 'float',
        'previousProgressApplied' => 'float',
        'productTotal' => 'float',
        'reference' => 'string',
        'remainingDownpayment' => 'float',
        'restrictDownpaymentFlag' => 'boolean',
        'salesTax' => 'float',
        'serviceAdjustmentAmount' => 'float',
        'serviceTotal' => 'float',
        'shipToCompany' => CompanyReference::class,
        'shippingSite' => SiteReference::class,
        'specialInvoiceFlag' => 'boolean',
        'status' => BillingStatusReference::class,
        'subtotal' => 'float',
        'taxCode' => TaxCodeReference::class,
        'taxableFlag' => 'boolean',
        'templateSetupId' => 'integer',
        'territoryId' => 'integer',
        'topComment' => 'string',
        'total' => 'float',
        'type' => 'string'
    ];
}
