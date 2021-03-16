<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorariosTable Test Case
 */
class HorariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HorariosTable
     */
    public $Horarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Horarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Horarios') ? [] : ['className' => HorariosTable::class];
        $this->Horarios = TableRegistry::getTableLocator()->get('Horarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Horarios);

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
