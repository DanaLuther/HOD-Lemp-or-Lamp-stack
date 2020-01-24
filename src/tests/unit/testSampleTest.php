<?php

require '/var/www/html/DemoQuickCalculator.php';

class testSampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testBasicMath()
    {
		$this->assertEquals(4, \DemoQuickCalculator::alwaysEquals4());
    }
}