<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalesOrderFixture
 *
 */
class SalesOrderFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sales_order';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'total_cost' => ['type' => 'decimal', 'length' => 6, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => ''],
        'submit_date' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'shipping_cost' => ['type' => 'decimal', 'length' => 6, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => ''],
        'delivery_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'delivery_status' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => 'pending', 'comment' => '', 'precision' => null],
        'contact_phone_area_code' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_phone_number' => ['type' => 'integer', 'length' => 7, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customer_username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'credit_card_number' => ['type' => 'string', 'fixed' => true, 'length' => 16, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'contact_phone_area_code' => ['type' => 'index', 'columns' => ['contact_phone_area_code', 'contact_phone_number'], 'length' => []],
            'credit_card_number' => ['type' => 'index', 'columns' => ['credit_card_number'], 'length' => []],
            'sales_order_ibfk_2' => ['type' => 'index', 'columns' => ['customer_username'], 'length' => []],
            'sales_order_ibfk_3' => ['type' => 'index', 'columns' => ['address_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'sales_order_ibfk_1' => ['type' => 'foreign', 'columns' => ['contact_phone_number'], 'references' => ['phone', 'number'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sales_order_ibfk_2' => ['type' => 'foreign', 'columns' => ['customer_username'], 'references' => ['customer', 'username'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sales_order_ibfk_3' => ['type' => 'foreign', 'columns' => ['address_id'], 'references' => ['address', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'total_cost' => '',
            'submit_date' => 1428499677,
            'shipping_cost' => '',
            'delivery_date' => '2015-04-08',
            'delivery_status' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'contact_phone_area_code' => 1,
            'contact_phone_number' => 1,
            'customer_username' => 'Lorem ipsum dolor sit amet',
            'address_id' => 1,
            'credit_card_number' => 'Lorem ipsum do'
        ],
    ];
}
