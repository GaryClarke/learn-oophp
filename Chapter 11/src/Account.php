<?php // src/Account.php

namespace App;

class Account
{
    private int $accountNumber;

    public function setAccountNumber(int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }
}