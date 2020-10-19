<?php 
class MyTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    
    const DATA_LOCATION='datas/';
    
    protected function _before()
    {
        include_once "./include/datas.inc.php";
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(1===1);
    
    }
    
    // Tests 
    
    public function testEmployeeLoading()
    {
        $employees=jsonFileToArray(self::DATA_LOCATION.'employees.json');
        $this->assertIsArray($employees);
        $this->assertEquals(16, count($employees));
    } 
}