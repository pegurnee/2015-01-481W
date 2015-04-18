<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReviewFixture
 *
 */
class ReviewFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'review';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'book_isbn' => ['type' => 'string', 'fixed' => true, 'length' => 13, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'customer_username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'submit_time' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'rating' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'content' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'customer_username' => ['type' => 'index', 'columns' => ['customer_username'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['book_isbn', 'customer_username'], 'length' => []],
            'review_ibfk_1' => ['type' => 'foreign', 'columns' => ['customer_username'], 'references' => ['customer', 'username'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'review_ibfk_2' => ['type' => 'foreign', 'columns' => ['book_isbn'], 'references' => ['book', 'isbn'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'book_isbn' => 'd136a12d-55f7-4e0b-8f51-92aa980ed56f',
            'customer_username' => '3bd08f74-11f1-45a4-8a1a-608964fb006d',
            'submit_time' => 1428499670,
            'rating' => 1,
            'content' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
