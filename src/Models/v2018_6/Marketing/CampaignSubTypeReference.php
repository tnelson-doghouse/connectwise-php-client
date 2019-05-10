<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignSubTypeReference Version v2018_6
 *
 * Model for CampaignSubTypeReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CampaignSubTypeReference extends Model
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
