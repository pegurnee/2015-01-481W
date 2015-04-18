<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CreditCardFixture
 *
 */
class CreditCardFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'credit_card';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'number' => ['type' => 'string', 'fixed' => true, 'length' => 16, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'ccv' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'type' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'expiration' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name_on_card' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'issuer' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'pin_number' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'associated_zip' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['number'], 'length' => []],
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
            'number' => '0d6cc2d0-5d89-45d4-9ba9-ea0038a3c84b',
            'ccv' => 'Lo',
            'type' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'expiration' => '2015-04-08',
            'name_on_card' => 'Lorem ipsum dolor sit amet',
            'issuer' => 'Lorem ipsum do',
            'pin_number' => 1,
            'associated_zip' => 1
        ],
    ];
}
