<?php
namespace App\Model\Table;

use App\Model\Entity\Address;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addresses Model
 */
class AddressesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('addresses');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsToMany('Users', [
            'foreignKey' => 'address_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'addresses_users'
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
            ->allowEmpty('state')
            ->add('zip', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('zip');

        return $validator;
    }
}
