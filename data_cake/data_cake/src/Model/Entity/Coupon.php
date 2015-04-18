<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coupon Entity.
 */
class Coupon extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'expiration_date' => true,
        'value' => true,
        'used' => true,
        'customer_username' => true,
        'order_id' => true,
        'sales_order' => true,
    ];
}
