<?php // src/User.php

namespace App;

class User
{
    public function __construct(public string $username, protected string $password)
    {
    }

    public function __serialize(): array
    {
        return [
            'user' => $this->username,
            'pass' => $this->password
        ];
    }
}