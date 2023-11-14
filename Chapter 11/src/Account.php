<?php // src/Account.php

namespace App;

class Account
{
    private int $accountNumber;
    private User $accountHolder;

    public function setAccountNumber(int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function setAccountHolder(User $accountHolder): void
    {
        $this->accountHolder = $accountHolder;
    }

    public function getAccountHolder(): User
    {
        return $this->accountHolder;
    }
}