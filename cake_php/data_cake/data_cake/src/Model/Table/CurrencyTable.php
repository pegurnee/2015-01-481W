<?php
namespace App\Model\Table;

use App\Model\Entity\Currency;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Currency Model
 */
class CurrencyTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('currency');
        $this->displayField('name');
        $this->primaryKey('name');
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
            ->allowEmpty('name', 'create')
            ->requirePresence('symbol', 'create')
            ->notEmpty('symbol')
            ->add('price_multiplier', 'valid', ['rule' => 'decimal'])
            ->requirePresence('price_multiplier', 'create')
            ->notEmpty('price_multiplier')
            ->allowEmpty('symbol_location');

        return $validator;
    }
}
