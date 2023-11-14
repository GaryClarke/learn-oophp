<?php // src/Account.php

namespace App;

class Account
{
    private int $accountNumber;
    private User $user;

    public function setAccountNumber(int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}