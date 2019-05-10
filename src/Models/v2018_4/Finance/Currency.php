<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Currency Version v2018_4
 *
 * Model for Currency
 *
 * @property Metadata $_info
 * @property boolean $displayIdFlag
 * @property boolean $displaySymbolFlag
 * @property integer $id
 * @property string $currencyIdentifier
 * @property string $isoCode
 * @property string $name
 * @property string $symbol
 */
class Currency extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'currencyIdentifier' => 'string',
        'displayIdFlag' => 'boolean',
        'displaySymbolFlag' => 'boolean',
        'id' => 'integer',
        'isoCode' => 'string',
        'name' => 'string',
        'symbol' => 'string'
    ];
}
