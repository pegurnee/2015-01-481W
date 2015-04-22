<?php
namespace App\Model\Table;

use App\Model\Entity\Phone;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Phone Model
 */
class PhoneTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('phone');
        $this->displayField('area_code');
        $this->primaryKey(['area_code', 'number']);
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
            ->add('area_code', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('area_code', 'create')
            ->add('number', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('number', 'create')
            ->requirePresence('carrier', 'create')
            ->notEmpty('carrier');

        return $validator;
    }
}
