<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementReference Version v2019_2
 *
 * Model for AgreementReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class AgreementReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
