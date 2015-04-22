<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StateFixture
 *
 */
class StateFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'state';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'abbreviation' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        'shipping_code' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'state_ibfk_1' => ['type' => 'index', 'columns' => ['shipping_code'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['abbreviation'], 'length' => []],
            'state_ibfk_1' => ['type' => 'foreign', 'columns' => ['shipping_code'], 'references' => ['shipping_zone', 'code'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'abbreviation' => '4a587e0e-f8db-4cd4-952a-838dc796e61f',
            'name' => 'Lorem ipsum dolor ',
            'shipping_code' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
