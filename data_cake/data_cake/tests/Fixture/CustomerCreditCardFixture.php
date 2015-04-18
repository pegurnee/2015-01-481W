<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerCreditCardFixture
 *
 */
class CustomerCreditCardFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer_credit_card';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'customer_username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'credit_card_number' => ['type' => 'string', 'fixed' => true, 'length' => 16, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'customer_credit_card_ibfk_2_idx' => ['type' => 'index', 'columns' => ['credit_card_number'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['customer_username', 'credit_card_number'], 'length' => []],
            'customer_credit_card_ibfk_1' => ['type' => 'foreign', 'columns' => ['customer_username'], 'references' => ['customer', 'username'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'customer_credit_card_ibfk_2' => ['type' => 'foreign', 'columns' => ['credit_card_number'], 'references' => ['credit_card', 'number'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'customer_username' => '10c1761c-00ae-4221-b609-4d840c69ffff',
            'credit_card_number' => '24c44b68-9629-4715-ac5d-1445d2e87685'
        ],
    ];
}
