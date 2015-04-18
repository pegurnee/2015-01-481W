<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublisherTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublisherTable Test Case
 */
class PublisherTableTest extends TestCase
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Publisher') ? [] : ['className' => 'App\Model\Table\PublisherTable'];
        $this->Publisher = TableRegistry::get('Publisher', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Publisher);

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
