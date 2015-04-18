<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SeriesEntry Entity.
 */
class SeriesEntry extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'position' => true,
        'series' => true,
    ];
}
