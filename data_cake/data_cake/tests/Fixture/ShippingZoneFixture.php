<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShippingZoneFixture
 *
 */
class ShippingZoneFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'shipping_zone';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'code' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'price' => ['type' => 'decimal', 'length' => 6, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'deliver_time' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['code'], 'length' => []],
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
            'code' => '78d210ab-a2f4-43a8-8ad5-adcff396d0ce',
            'price' => '',
            'deliver_time' => 1
        ],
    ];
}
