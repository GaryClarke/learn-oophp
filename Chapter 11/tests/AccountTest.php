<?php // tests/AccountTest.php

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    /** @test  */
    public function an_account_number_can_be_set(): void
    {
        // Setup
        $account = new \App\Account();

        // Do something
        $account->setAccountNumber(1);

        // Make assertions
        $this->assertSame(1, $account->getAccountNumber());
    }
}