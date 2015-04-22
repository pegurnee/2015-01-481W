<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AddressFixture
 *
 */
class AddressFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'address';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'street_address' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'city' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'zip' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'state' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'address_ibfk_1' => ['type' => 'index', 'columns' => ['state'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'address_ibfk_1' => ['type' => 'foreign', 'columns' => ['state'], 'references' => ['state', 'abbreviation'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id' => 1,
            'street_address' => 'Lorem ipsum dolor sit amet',
            'city' => 'Lorem ipsum dolor sit amet',
            'zip' => 1,
            'state' => ''
        ],
    ];
}
