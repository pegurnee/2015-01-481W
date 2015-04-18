<?php
namespace App\Model\Table;

use App\Model\Entity\Book;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Book Model
 */
class BookTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('book');
        $this->displayField('title');
        $this->primaryKey('isbn');
        $this->belongsTo('Author', [
            'foreignKey' => 'author_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Publisher', [
            'foreignKey' => 'publisher_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Genre', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'genre_id',
            'joinTable' => 'book_genre'
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
            ->allowEmpty('isbn', 'create')
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->allowEmpty('description')
            ->add('price', 'valid', ['rule' => 'decimal'])
            ->requirePresence('price', 'create')
            ->notEmpty('price')
            ->allowEmpty('cover');

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
        $rules->add($rules->existsIn(['author_id'], 'Author'));
        $rules->add($rules->existsIn(['publisher_id'], 'Publisher'));
        return $rules;
    }
}
