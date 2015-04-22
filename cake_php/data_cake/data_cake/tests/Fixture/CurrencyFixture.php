<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CurrencyFixture
 *
 */
class CurrencyFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'currency';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'name' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'symbol' => ['type' => 'string', 'fixed' => true, 'length' => 8, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'price_multiplier' => ['type' => 'decimal', 'length' => 13, 'precision' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'symbol_location' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['name'], 'length' => []],
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
            'name' => '79fd5f84-f246-4d52-92af-5581c5d6fd3b',
            'symbol' => 'Lorem ',
            'price_multiplier' => '',
            'symbol_location' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
