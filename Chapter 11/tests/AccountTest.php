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
}