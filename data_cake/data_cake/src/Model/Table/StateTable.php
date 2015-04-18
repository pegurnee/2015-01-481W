<?php
namespace App\Model\Table;

use App\Model\Entity\State;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * State Model
 */
class StateTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('state');
        $this->displayField('name');
        $this->primaryKey('abbreviation');
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
            ->allowEmpty('abbreviation', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('shipping_code', 'create')
            ->notEmpty('shipping_code');

        return $validator;
    }
}
