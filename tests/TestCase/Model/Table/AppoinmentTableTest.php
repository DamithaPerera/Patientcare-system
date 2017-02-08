<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppoinmentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppoinmentTable Test Case
 */
class AppoinmentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AppoinmentTable
     */
    public $Appoinment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appoinment',
        'app.patients',
        'app.carriers',
        'app.invoices',
        'app.doctors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Appoinment') ? [] : ['className' => 'App\Model\Table\AppoinmentTable'];
        $this->Appoinment = TableRegistry::get('Appoinment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Appoinment);

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
