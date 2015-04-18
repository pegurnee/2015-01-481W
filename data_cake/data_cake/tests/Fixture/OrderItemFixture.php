<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderItemFixture
 *
 */
class OrderItemFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'order_item';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'order_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'book_isbn' => ['type' => 'string', 'fixed' => true, 'length' => 13, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'quantity' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'book_isbn' => ['type' => 'index', 'columns' => ['book_isbn'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['order_id', 'book_isbn'], 'length' => []],
            'order_item_ibfk_1' => ['type' => 'foreign', 'columns' => ['book_isbn'], 'references' => ['book', 'isbn'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'order_item_ibfk_2' => ['type' => 'foreign', 'columns' => ['order_id'], 'references' => ['sales_order', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'order_id' => 1,
            'book_isbn' => '50c147f2-42ba-4134-a557-b4b5aa7f4d75',
            'quantity' => 1
        ],
    ];
}
