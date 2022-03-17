<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function frontpageWorks(AcceptanceTester $I, \Page\Acceptance\First $loginPage)
    {
        $I->amOnPage('/');
        $I->seeInTitle('Home');
        $I->seeLink('Sign in');
        $I->click('Sign in');
        $I->canSeeInCurrentUrl('/#/login');
        $I->pause();
        // $I->waitForElement('#agree_button', 30); // secs
        // $I->fillField('Email', 'test@user.ts');
        // $I->fillField('Password', 'admin');
        $loginPage->login('test@user.ts', 'admin');
        // $I->click('Sign in');
        $I->waitForElement('.user-pic', 10);
        $I->wait(5);
        // test@user.ts
    }
}
