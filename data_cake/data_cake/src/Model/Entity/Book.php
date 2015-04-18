<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity.
 */
class Book extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'price' => true,
        'author_id' => true,
        'publisher_id' => true,
        'cover' => true,
        'author' => true,
        'publisher' => true,
        'genre' => true,
    ];
}
