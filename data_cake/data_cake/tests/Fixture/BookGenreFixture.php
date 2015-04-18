<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookGenreFixture
 *
 */
class BookGenreFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'book_genre';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'isbn' => ['type' => 'string', 'fixed' => true, 'length' => 13, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'genre_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'genre_id' => ['type' => 'index', 'columns' => ['genre_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['isbn', 'genre_id'], 'length' => []],
            'book_genre_ibfk_1' => ['type' => 'foreign', 'columns' => ['isbn'], 'references' => ['book', 'isbn'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'book_genre_ibfk_2' => ['type' => 'foreign', 'columns' => ['genre_id'], 'references' => ['genre', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'isbn' => '157ec23e-aec5-4e56-adc3-d68642d22a20',
            'genre_id' => 1
        ],
    ];
}
