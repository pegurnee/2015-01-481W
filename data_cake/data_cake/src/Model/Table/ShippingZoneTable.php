<?php
namespace App\Model\Table;

use App\Model\Entity\ShippingZone;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShippingZone Model
 */
class ShippingZoneTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('shipping_zone');
        $this->displayField('code');
        $this->primaryKey('code');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('code', 'create')
            ->add('price', 'valid', ['rule' => 'decimal'])
            ->requirePresence('price', 'create')
            ->notEmpty('price')
            ->add('deliver_time', 'valid', ['rule' => 'numeric'])
            ->requirePresence('deliver_time', 'create')
            ->notEmpty('deliver_time');

        return $validator;
    }
}
