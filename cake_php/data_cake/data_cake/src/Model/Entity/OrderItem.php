<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderItem Entity.
 */
class OrderItem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'quantity' => true,
        'sales_order' => true,
    ];
}
