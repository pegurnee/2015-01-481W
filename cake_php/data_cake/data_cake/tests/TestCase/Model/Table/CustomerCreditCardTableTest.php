<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerCreditCardTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerCreditCardTable Test Case
 */
class CustomerCreditCardTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'CustomerCreditCard' => 'app.customer_credit_card'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomerCreditCard') ? [] : ['className' => 'App\Model\Table\CustomerCreditCardTable'];
        $this->CustomerCreditCard = TableRegistry::get('CustomerCreditCard', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerCreditCard);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
