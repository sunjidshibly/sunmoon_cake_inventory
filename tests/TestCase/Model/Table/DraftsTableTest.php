<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DraftsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DraftsTable Test Case
 */
class DraftsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DraftsTable
     */
    public $Drafts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.drafts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Drafts') ? [] : ['className' => 'App\Model\Table\DraftsTable'];
        $this->Drafts = TableRegistry::get('Drafts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Drafts);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
