<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShippingZone Entity.
 */
class ShippingZone extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'price' => true,
        'deliver_time' => true,
    ];
}
