<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CreditCardTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CreditCardTable Test Case
 */
class CreditCardTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'CreditCard' => 'app.credit_card',
        'Customer' => 'app.customer',
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
        $config = TableRegistry::exists('CreditCard') ? [] : ['className' => 'App\Model\Table\CreditCardTable'];
        $this->CreditCard = TableRegistry::get('CreditCard', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CreditCard);

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
