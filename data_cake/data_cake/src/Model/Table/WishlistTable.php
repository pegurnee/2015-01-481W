<?php
namespace App\Model\Table;

use App\Model\Entity\Wishlist;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wishlist Model
 */
class WishlistTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('wishlist');
        $this->displayField('book_isbn');
        $this->primaryKey(['book_isbn', 'customer_username']);
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
            ->allowEmpty('book_isbn', 'create')
            ->allowEmpty('customer_username', 'create');

        return $validator;
    }
}
