<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookFixture
 *
 */
class BookFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'book';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'isbn' => ['type' => 'string', 'fixed' => true, 'length' => 13, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'string', 'length' => 2048, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'price' => ['type' => 'decimal', 'length' => 6, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => ''],
        'author_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'publisher_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cover' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'author_id' => ['type' => 'index', 'columns' => ['author_id'], 'length' => []],
            'publisher_id' => ['type' => 'index', 'columns' => ['publisher_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['isbn'], 'length' => []],
            'book_ibfk_1' => ['type' => 'foreign', 'columns' => ['author_id'], 'references' => ['author', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'book_ibfk_3' => ['type' => 'foreign', 'columns' => ['publisher_id'], 'references' => ['publisher', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'isbn' => '56b589e3-8e2a-4243-9272-ac7e2670a5d1',
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet',
            'price' => '',
            'author_id' => 1,
            'publisher_id' => 1,
            'cover' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
