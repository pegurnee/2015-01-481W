<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Email Entity.
 */
class Email extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'email' => true,
        'user' => true,
    ];
}
