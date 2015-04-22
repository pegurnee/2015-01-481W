<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PublisherController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PublisherController Test Case
 */
class PublisherControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Publisher' => 'app.publisher',
        'Book' => 'app.book',
        'Author' => 'app.author',
        'Genre' => 'app.genre',
        'BookGenre' => 'app.book_genre'
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
