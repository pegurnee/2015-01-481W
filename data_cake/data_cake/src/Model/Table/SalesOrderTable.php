<?php
namespace App\Model\Table;

use App\Model\Entity\SalesOrder;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesOrder Model
 */
class SalesOrderTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('sales_order');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Address', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('total_cost', 'valid', ['rule' => 'decimal'])
            ->requirePresence('total_cost', 'create')
            ->notEmpty('total_cost')
            ->requirePresence('submit_date', 'create')
            ->notEmpty('submit_date')
            ->add('shipping_cost', 'valid', ['rule' => 'decimal'])
            ->requirePresence('shipping_cost', 'create')
            ->notEmpty('shipping_cost')
            ->add('delivery_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('delivery_date')
            ->requirePresence('delivery_status', 'create')
            ->notEmpty('delivery_status')
            ->add('contact_phone_area_code', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('contact_phone_area_code')
            ->add('contact_phone_number', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('contact_phone_number')
            ->requirePresence('customer_username', 'create')
            ->notEmpty('customer_username')
            ->requirePresence('credit_card_number', 'create')
            ->notEmpty('credit_card_number');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['address_id'], 'Address'));
        return $rules;
    }
}
