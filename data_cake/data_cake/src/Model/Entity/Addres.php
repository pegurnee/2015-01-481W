<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity.
 */
class Addres extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'street_address' => true,
        'city' => true,
        'zip' => true,
        'state' => true,
        'customer' => true,
    ];
}
