<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity.
 */
class Customer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'password' => true,
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'middle_initial' => true,
        'date_of_birth' => true,
        'loyalty_points' => true,
        'one_click_buying' => true,
        'prime_member' => true,
        'phone_area_code' => true,
        'phone_number' => true,
        'address_id' => true,
        'card_number' => true,
        'address' => true,
        'credit_card' => true,
    ];
}
