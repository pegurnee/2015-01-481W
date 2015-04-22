<?php
namespace App\Model\Table;

use App\Model\Entity\CustomerCreditCard;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerCreditCard Model
 */
class CustomerCreditCardTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customer_credit_card');
        $this->displayField('customer_username');
        $this->primaryKey(['customer_username', 'credit_card_number']);
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
            ->allowEmpty('customer_username', 'create')
            ->allowEmpty('credit_card_number', 'create');

        return $validator;
    }
}
