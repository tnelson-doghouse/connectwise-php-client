<?php

namespace Spinen\ConnectWise\Models\v2019_3\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignSubType Version v2019_3
 *
 * Model for CampaignSubType
 *
 * @property CampaignTypeReference $type
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CampaignSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
        'type' => CampaignTypeReference::class
    ];
}
