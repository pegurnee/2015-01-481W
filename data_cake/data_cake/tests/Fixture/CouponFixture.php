<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CouponFixture
 *
 */
class CouponFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'coupon';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'entry_code' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'expiration_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'value' => ['type' => 'decimal', 'length' => 6, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'used' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'customer_username' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'order_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'coupon_ibfk_1' => ['type' => 'index', 'columns' => ['customer_username'], 'length' => []],
            'coupon_ibfk_2' => ['type' => 'index', 'columns' => ['order_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['entry_code'], 'length' => []],
            'coupon_ibfk_1' => ['type' => 'foreign', 'columns' => ['customer_username'], 'references' => ['customer', 'username'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'coupon_ibfk_2' => ['type' => 'foreign', 'columns' => ['order_id'], 'references' => ['sales_order', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'entry_code' => '1d4a1651-c5ed-4308-b397-97f107889448',
            'expiration_date' => '2015-04-08',
            'value' => '',
            'used' => 1,
            'customer_username' => 'Lorem ipsum dolor sit amet',
            'order_id' => 1
        ],
    ];
}
