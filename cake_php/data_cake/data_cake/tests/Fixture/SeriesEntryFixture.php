<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SeriesEntryFixture
 *
 */
class SeriesEntryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'series_entry';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'book_isbn' => ['type' => 'string', 'fixed' => true, 'length' => 13, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'series_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'position' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'series_id' => ['type' => 'index', 'columns' => ['series_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['book_isbn', 'series_id'], 'length' => []],
            'series_entry_ibfk_1' => ['type' => 'foreign', 'columns' => ['book_isbn'], 'references' => ['book', 'isbn'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'series_entry_ibfk_2' => ['type' => 'foreign', 'columns' => ['series_id'], 'references' => ['series', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'book_isbn' => '1da2f4d8-2307-4828-be93-1bd8d4868388',
            'series_id' => 1,
            'position' => 1
        ],
    ];
}
