<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SellsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SellsTable Test Case
 */
class SellsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SellsTable
     */
    public $Sells;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sells'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sells') ? [] : ['className' => 'App\Model\Table\SellsTable'];
        $this->Sells = TableRegistry::get('Sells', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sells);

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
