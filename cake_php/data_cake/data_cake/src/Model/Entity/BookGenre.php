<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BookGenre Entity.
 */
class BookGenre extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'genre' => true,
    ];
}
