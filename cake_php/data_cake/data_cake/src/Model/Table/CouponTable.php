<?php
namespace App\Model\Table;

use App\Model\Entity\Coupon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coupon Model
 */
class CouponTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('coupon');
        $this->displayField('entry_code');
        $this->primaryKey('entry_code');
        $this->belongsTo('SalesOrder', [
            'foreignKey' => 'order_id'
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
            ->allowEmpty('entry_code', 'create')
            ->add('expiration_date', 'valid', ['rule' => 'date'])
            ->requirePresence('expiration_date', 'create')
            ->notEmpty('expiration_date')
            ->add('value', 'valid', ['rule' => 'decimal'])
            ->requirePresence('value', 'create')
            ->notEmpty('value')
            ->add('used', 'valid', ['rule' => 'boolean'])
            ->requirePresence('used', 'create')
            ->notEmpty('used')
            ->allowEmpty('customer_username');

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
        $rules->add($rules->existsIn(['order_id'], 'SalesOrder'));
        return $rules;
    }
}
