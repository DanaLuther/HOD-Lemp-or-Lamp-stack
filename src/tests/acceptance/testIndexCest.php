<?php 

class testIndexCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    	$I->amOnPage('/index.php');
    	$I->see('PHP Version');
    }
}
