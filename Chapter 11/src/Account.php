<?php // src/Account.php

namespace App;

class Account 
{
    private int $accountNumber;

    public function setAccountNumber($accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }
}