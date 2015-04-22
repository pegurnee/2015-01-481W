<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity.
 */
class Review extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'submit_time' => true,
        'rating' => true,
        'content' => true,
    ];
}
