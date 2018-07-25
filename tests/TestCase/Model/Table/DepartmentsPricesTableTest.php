<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartmentsPricesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartmentsPricesTable Test Case
 */
class DepartmentsPricesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartmentsPricesTable
     */
    public $DepartmentsPrices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departments_prices',
        'app.departments',
        'app.prices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DepartmentsPrices') ? [] : ['className' => DepartmentsPricesTable::class];
        $this->DepartmentsPrices = TableRegistry::getTableLocator()->get('DepartmentsPrices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DepartmentsPrices);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
