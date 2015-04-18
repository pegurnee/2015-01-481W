<?php
namespace App\Model\Table;

use App\Model\Entity\Addres;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Address Model
 */
class AddressTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('address');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsToMany('Customer', [
            'foreignKey' => 'addres_id',
            'targetForeignKey' => 'customer_id',
            'joinTable' => 'customer_address'
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
            ->allowEmpty('street_address')
            ->allowEmpty('city')
            ->add('zip', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('zip')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        return $validator;
    }
}
