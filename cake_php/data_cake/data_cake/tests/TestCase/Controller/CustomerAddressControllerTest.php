<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CustomerAddressController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CustomerAddressController Test Case
 */
class CustomerAddressControllerTest extends IntegrationTestCase
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
