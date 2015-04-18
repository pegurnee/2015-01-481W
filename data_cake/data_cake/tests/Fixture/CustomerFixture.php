<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerFixture
 *
 */
class CustomerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'fixed' => true, 'length' => 41, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'email' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'first_name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_name' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'middle_initial' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_of_birth' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'loyalty_points' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'one_click_buying' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'prime_member' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'phone_area_code' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'phone_number' => ['type' => 'integer', 'length' => 7, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'card_number' => ['type' => 'string', 'fixed' => true, 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'phone_area_code' => ['type' => 'index', 'columns' => ['phone_area_code', 'phone_number'], 'length' => []],
            'address_id' => ['type' => 'index', 'columns' => ['address_id'], 'length' => []],
            'card_number' => ['type' => 'index', 'columns' => ['card_number'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['username'], 'length' => []],
            'customer_ibfk_1' => ['type' => 'foreign', 'columns' => ['phone_number'], 'references' => ['phone', 'number'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'customer_ibfk_2' => ['type' => 'foreign', 'columns' => ['address_id'], 'references' => ['address', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'username' => 'b578bc55-9deb-41e2-879e-5a056a14274c',
            'password' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'middle_initial' => 'Lorem ipsum dolor sit ame',
            'date_of_birth' => '2015-04-08',
            'loyalty_points' => 1,
            'one_click_buying' => 1,
            'prime_member' => 1,
            'phone_area_code' => 1,
            'phone_number' => 1,
            'address_id' => 1,
            'card_number' => 'Lorem ipsum do'
        ],
    ];
}
