<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SellsFixture
 *
 */
class SellsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sell_code' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'product_code' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'product_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sell_quantity' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unit_price' => ['type' => 'decimal', 'length' => 65, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'sell_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'product_code' => ['type' => 'index', 'columns' => ['product_code'], 'length' => []],
            'product_name' => ['type' => 'index', 'columns' => ['product_name'], 'length' => []],
            'unit_price' => ['type' => 'index', 'columns' => ['unit_price'], 'length' => []],
            'product_code_2' => ['type' => 'index', 'columns' => ['product_code'], 'length' => []],
            'product_name_2' => ['type' => 'index', 'columns' => ['product_name'], 'length' => []],
            'unit_price_2' => ['type' => 'index', 'columns' => ['unit_price'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'sells_ibfk_1' => ['type' => 'foreign', 'columns' => ['product_code'], 'references' => ['products', 'product_code'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sells_ibfk_2' => ['type' => 'foreign', 'columns' => ['product_name'], 'references' => ['products', 'product_name'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sells_ibfk_3' => ['type' => 'foreign', 'columns' => ['unit_price'], 'references' => ['products', 'unit_price'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ID' => 1,
            'sell_code' => 'Lorem ipsum dolor sit amet',
            'product_code' => 'Lorem ipsum dolor sit amet',
            'product_name' => 'Lorem ipsum dolor sit amet',
            'sell_quantity' => 1,
            'unit_price' => 1.5,
            'sell_date' => '2017-02-09 04:57:40'
        ],
    ];
}
