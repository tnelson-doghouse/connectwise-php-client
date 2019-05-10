<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogComponent Version v2018_6
 * 
 * Model for CatalogComponent
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property float $quantity
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference $catalogItem
 * @property boolean $hidePriceFlag
 * @property boolean $hideItemIdentifierFlag
 * @property boolean $hideDescriptionFlag
 * @property boolean $hideQuantityFlag
 * @property boolean $hideExtendedPriceFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference $parentCatalogItem
 * @property float $price
 * @property float $cost
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 */
class CatalogComponent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sequenceNumber' => 'integer',
        'quantity' => 'float',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference',
        'hidePriceFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hideDescriptionFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'hideExtendedPriceFlag' => 'boolean',
        'parentCatalogItem' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\CatalogItemReference',
        'price' => 'float',
        'cost' => 'float',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
    ];
}
