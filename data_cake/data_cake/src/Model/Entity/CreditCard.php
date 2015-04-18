<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CreditCard Entity.
 */
class CreditCard extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ccv' => true,
        'type' => true,
        'expiration' => true,
        'name_on_card' => true,
        'issuer' => true,
        'pin_number' => true,
        'associated_zip' => true,
        'customer' => true,
    ];
}
