<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerAddressFixture
 *
 */
class CustomerAddressFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer_address';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'address_id' => ['type' => 'index', 'columns' => ['address_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['username', 'address_id'], 'length' => []],
            'customer_address_ibfk_1' => ['type' => 'foreign', 'columns' => ['username'], 'references' => ['customer', 'username'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'customer_address_ibfk_2' => ['type' => 'foreign', 'columns' => ['address_id'], 'references' => ['address', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'username' => '031e8d11-a961-4004-85e1-6c2fa4e595b4',
            'address_id' => 1
        ],
    ];
}
