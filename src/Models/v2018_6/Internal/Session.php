<?php

namespace Spinen\ConnectWise\Models\v2018_6\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Session Version v2018_6
 *
 * Model for Session
 *
 * @property MemberReference $member
 * @property TicketReference $ticket
 * @property integer $configurationId
 * @property integer $id
 * @property string $sessionGuid
 */
class Session extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'configurationId' => 'integer',
        'id' => 'integer',
        'member' => MemberReference::class,
        'sessionGuid' => 'string',
        'ticket' => TicketReference::class
    ];
}
