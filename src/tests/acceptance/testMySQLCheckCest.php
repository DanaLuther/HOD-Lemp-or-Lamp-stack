<?php 

class testMySQLCheckCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
	    $I->amOnPage('mysql-check.php');
	    $I->dontSee('Aw shucks pardner');
	    $I->see('MySQL Version');
    }
}
