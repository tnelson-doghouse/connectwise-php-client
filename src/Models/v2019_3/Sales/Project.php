<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Project Version v2019_3
 * 
 * Model for Project
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property Carbon\Carbon $actualEnd
 * @property float $actualHours
 * @property Carbon\Carbon $actualStart
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\AgreementReference $agreement
 * @property string $billExpenses
 * @property float $billingAmount
 * @property string $billingAttention
 * @property string $billingMethod
 * @property string $billingRateType
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\BillingTermsReference $billingTerms
 * @property string $billProducts
 * @property boolean $billProjectAfterClosedFlag
 * @property string $billTime
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference $billToSite
 * @property boolean $billUnapprovedTimeAndExpense
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ProjectBoardReference $board
 * @property string $budgetAnalysis
 * @property boolean $budgetFlag
 * @property float $budgetHours
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $contact
 * @property string $customerPO
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CurrencyReference $currency
 * @property float $downpayment
 * @property Carbon\Carbon $estimatedEnd
 * @property float $percentComplete
 * @property float $estimatedExpenseRevenue
 * @property float $estimatedHours
 * @property float $estimatedProductRevenue
 * @property Carbon\Carbon $estimatedStart
 * @property float $estimatedTimeRevenue
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $expenseApprover
 * @property boolean $includeDependenciesFlag
 * @property boolean $includeEstimatesFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $manager
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\OpportunityReference $opportunity
 * @property integer $projectTemplateId
 * @property boolean $restrictDownPaymentFlag
 * @property Carbon\Carbon $scheduledEnd
 * @property float $scheduledHours
 * @property Carbon\Carbon $scheduledStart
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ProjectStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\ProjectTypeReference $type
 * @property boolean $doNotDisplayInPortalFlag
 * @property Carbon\Carbon $billingStartDate
 * @property float $estimatedTimeCost
 * @property float $estimatedExpenseCost
 * @property float $estimatedProductCost
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference $companyLocation
 * @property array $customFields
 */
class Project extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'actualEnd' => 'Carbon\Carbon',
        'actualHours' => 'float',
        'actualStart' => 'Carbon\Carbon',
        'agreement' => 'Spinen\ConnectWise\Models\v2019_3\Sales\AgreementReference',
        'billExpenses' => 'string',
        'billingAmount' => 'float',
        'billingAttention' => 'string',
        'billingMethod' => 'string',
        'billingRateType' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_3\Sales\BillingTermsReference',
        'billProducts' => 'string',
        'billProjectAfterClosedFlag' => 'boolean',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference',
        'billUnapprovedTimeAndExpense' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ProjectBoardReference',
        'budgetAnalysis' => 'string',
        'budgetFlag' => 'boolean',
        'budgetHours' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'customerPO' => 'string',
        'description' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CurrencyReference',
        'downpayment' => 'float',
        'estimatedEnd' => 'Carbon\Carbon',
        'percentComplete' => 'float',
        'estimatedExpenseRevenue' => 'float',
        'estimatedHours' => 'float',
        'estimatedProductRevenue' => 'float',
        'estimatedStart' => 'Carbon\Carbon',
        'estimatedTimeRevenue' => 'float',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'includeDependenciesFlag' => 'boolean',
        'includeEstimatesFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemDepartmentReference',
        'manager' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'name' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_3\Sales\OpportunityReference',
        'projectTemplateId' => 'integer',
        'restrictDownPaymentFlag' => 'boolean',
        'scheduledEnd' => 'Carbon\Carbon',
        'scheduledHours' => 'float',
        'scheduledStart' => 'Carbon\Carbon',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_3\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ProjectStatusReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Sales\ProjectTypeReference',
        'doNotDisplayInPortalFlag' => 'boolean',
        'billingStartDate' => 'Carbon\Carbon',
        'estimatedTimeCost' => 'float',
        'estimatedExpenseCost' => 'float',
        'estimatedProductCost' => 'float',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_3\Sales\TaxCodeReference',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_3\Sales\SystemLocationReference',
        'customFields' => 'array',
    ];
}
