<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WishlistFixture
 *
 */
class WishlistFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'wishlist';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'book_isbn' => ['type' => 'string', 'fixed' => true, 'length' => 13, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null],
        'customer_username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'customer_username' => ['type' => 'index', 'columns' => ['customer_username'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['book_isbn', 'customer_username'], 'length' => []],
            'wishlist_ibfk_1' => ['type' => 'foreign', 'columns' => ['customer_username'], 'references' => ['customer', 'username'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'wishlist_ibfk_2' => ['type' => 'foreign', 'columns' => ['book_isbn'], 'references' => ['book', 'isbn'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'book_isbn' => '84364e35-be88-45cc-adc4-edef8010a255',
            'customer_username' => '38f77f9b-8b1f-4d63-9c27-153f33c2cbfe'
        ],
    ];
}
