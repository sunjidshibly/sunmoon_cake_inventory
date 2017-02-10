<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DraftsFixture
 *
 */
class DraftsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sell_no' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_code' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'product_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'unit_price' => ['type' => 'decimal', 'length' => 65, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'sell_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'product_code' => ['type' => 'index', 'columns' => ['product_code'], 'length' => []],
            'product_name' => ['type' => 'index', 'columns' => ['product_name'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'unit_price' => ['type' => 'unique', 'columns' => ['unit_price'], 'length' => []],
            'drafts_ibfk_2' => ['type' => 'foreign', 'columns' => ['product_code'], 'references' => ['products', 'product_code'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'drafts_ibfk_3' => ['type' => 'foreign', 'columns' => ['product_name'], 'references' => ['products', 'product_name'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'drafts_ibfk_4' => ['type' => 'foreign', 'columns' => ['unit_price'], 'references' => ['products', 'unit_price'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'id' => 1,
            'sell_no' => 1,
            'product_code' => 'Lorem ipsum dolor sit amet',
            'product_name' => 'Lorem ipsum dolor sit amet',
            'unit_price' => 1.5,
            'sell_date' => '2017-02-07 07:25:29'
        ],
    ];
}
