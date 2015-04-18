<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SalesOrderController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SalesOrderController Test Case
 */
class SalesOrderControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
