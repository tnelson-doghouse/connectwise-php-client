<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseBin Version v2018_6
 * 
 * Model for WarehouseBin
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\SystemDepartmentReference $department
 * @property float $minQuantity
 * @property float $maxQuantity
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseBinReference $overflowBin
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\MemberReference $manager
 * @property float $length
 * @property float $width
 * @property float $height
 * @property float $weight
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $quantityOnHand
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseBinReference $transferBin
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 */
class WarehouseBin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\SystemDepartmentReference',
        'minQuantity' => 'float',
        'maxQuantity' => 'float',
        'overflowBin' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseBinReference',
        'manager' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\MemberReference',
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'weight' => 'float',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'quantityOnHand' => 'integer',
        'transferBin' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\WarehouseBinReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
    ];
}
