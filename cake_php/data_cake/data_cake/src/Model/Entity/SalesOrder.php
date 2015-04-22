<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalesOrder Entity.
 */
class SalesOrder extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'total_cost' => true,
        'submit_date' => true,
        'shipping_cost' => true,
        'delivery_date' => true,
        'delivery_status' => true,
        'contact_phone_area_code' => true,
        'contact_phone_number' => true,
        'customer_username' => true,
        'address_id' => true,
        'credit_card_number' => true,
        'addres' => true,
    ];
}
