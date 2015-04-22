<?php
namespace App\Model\Table;

use App\Model\Entity\CreditCard;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CreditCard Model
 */
class CreditCardTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('credit_card');
        $this->displayField('number');
        $this->primaryKey('number');
        $this->belongsToMany('Customer', [
            'foreignKey' => 'credit_card_id',
            'targetForeignKey' => 'customer_id',
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
            ->allowEmpty('number', 'create')
            ->allowEmpty('ccv')
            ->allowEmpty('type')
            ->add('expiration', 'valid', ['rule' => 'date'])
            ->requirePresence('expiration', 'create')
            ->notEmpty('expiration')
            ->allowEmpty('name_on_card')
            ->allowEmpty('issuer')
            ->add('pin_number', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pin_number')
            ->add('associated_zip', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('associated_zip');

        return $validator;
    }
}
