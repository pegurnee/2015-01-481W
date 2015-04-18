<?php
namespace App\Model\Table;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customer Model
 */
class CustomerTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customer');
        $this->displayField('username');
        $this->primaryKey('username');
        $this->belongsTo('Address', [
            'foreignKey' => 'address_id'
        ]);
        $this->belongsToMany('Address', [
            'foreignKey' => 'customer_id',
            'targetForeignKey' => 'addres_id',
            'joinTable' => 'customer_address'
        ]);
        $this->belongsToMany('CreditCard', [
            'foreignKey' => 'customer_id',
            'targetForeignKey' => 'credit_card_id',
            'joinTable' => 'customer_credit_card'
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
            ->allowEmpty('username', 'create')
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')
            ->allowEmpty('middle_initial')
            ->add('date_of_birth', 'valid', ['rule' => 'date'])
            ->allowEmpty('date_of_birth')
            ->add('loyalty_points', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('loyalty_points')
            ->add('one_click_buying', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('one_click_buying')
            ->add('prime_member', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('prime_member')
            ->add('phone_area_code', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('phone_area_code')
            ->add('phone_number', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('phone_number')
            ->allowEmpty('card_number');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['address_id'], 'Address'));
        return $rules;
    }
}
