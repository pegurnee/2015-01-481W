<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity.
 */
class State extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'shipping_code' => true,
    ];
}
