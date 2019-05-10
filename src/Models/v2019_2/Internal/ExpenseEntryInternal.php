<?php

namespace Spinen\ConnectWise\Models\v2019_2\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseEntryInternal Version v2019_2
 * 
 * Model for ExpenseEntryInternal
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ExpenseReportReference $expenseReport
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ChargeToReference $chargeTo
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\PaymentMethodReference $paymentMethod
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\ClassificationReference $classification
 * @property float $amount
 * @property string $billableOption
 * @property Carbon\Carbon $date
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference $department
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\AgreementReference $agreement
 * @property float $invoiceAmount
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Guid $mobileGuid
 * @property array $taxes
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\InvoiceReference $invoice
 * @property string $status
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\CurrencyReference $currency
 * @property float $billAmount
 * @property Spinen\ConnectWise\Models\v2019_2\Internal\Metadata $_info
 */
class ExpenseEntryInternal extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'expenseReport' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ExpenseReportReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Internal\CompanyReference',
        'chargeTo' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ChargeToReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ExpenseTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Internal\MemberReference',
        'paymentMethod' => 'Spinen\ConnectWise\Models\v2019_2\Internal\PaymentMethodReference',
        'classification' => 'Spinen\ConnectWise\Models\v2019_2\Internal\ClassificationReference',
        'amount' => 'float',
        'billableOption' => 'string',
        'date' => 'Carbon\Carbon',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_2\Internal\SystemDepartmentReference',
        'notes' => 'string',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_2\Internal\AgreementReference',
        'invoiceAmount' => 'float',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Guid',
        'taxes' => 'array',
        'invoice' => 'Spinen\ConnectWise\Models\v2019_2\Internal\InvoiceReference',
        'status' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Internal\CurrencyReference',
        'billAmount' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Internal\Metadata',
    ];
}
