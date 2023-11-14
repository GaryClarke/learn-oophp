<?php // tests/AccountTest.php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    /** @test  */
    public function an_account_number_can_be_set(): void
    {
        // Setup
        $account = new \App\Account();

        // Do something
        $account->setAccountNumber(12345);

        // Make assertions
        $this->assertSame(12345, $account->getAccountNumber());
    }

    /** @test */
    public function an_account_can_be_related_to_a_user(): void
    {
        // Setup
        $account = new \App\Account();
        $accountHolder = new App\User();

        // Do something
        $account->setAccountHolder($accountHolder);

        // Make assertions
        $this->assertSame($accountHolder, $account->getAccountHolder());
    }
}