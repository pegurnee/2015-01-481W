<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerAddressTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerAddressTable Test Case
 */
class CustomerAddressTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'CustomerAddress' => 'app.customer_address',
        'Address' => 'app.address',
        'Customer' => 'app.customer',
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
        $config = TableRegistry::exists('CustomerAddress') ? [] : ['className' => 'App\Model\Table\CustomerAddressTable'];
        $this->CustomerAddress = TableRegistry::get('CustomerAddress', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerAddress);

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
