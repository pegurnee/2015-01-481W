<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesOrderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesOrderTable Test Case
 */
class SalesOrderTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'SalesOrder' => 'app.sales_order',
        'Address' => 'app.address',
        'Customer' => 'app.customer',
        'CustomerAddress' => 'app.customer_address',
        'CreditCard' => 'app.credit_card',
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
        $config = TableRegistry::exists('SalesOrder') ? [] : ['className' => 'App\Model\Table\SalesOrderTable'];
        $this->SalesOrder = TableRegistry::get('SalesOrder', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalesOrder);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
