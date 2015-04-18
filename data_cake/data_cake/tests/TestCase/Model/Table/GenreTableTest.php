<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenreTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenreTable Test Case
 */
class GenreTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Genre' => 'app.genre',
        'Book' => 'app.book',
        'Author' => 'app.author',
        'Publisher' => 'app.publisher',
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
        $config = TableRegistry::exists('Genre') ? [] : ['className' => 'App\Model\Table\GenreTable'];
        $this->Genre = TableRegistry::get('Genre', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Genre);

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
