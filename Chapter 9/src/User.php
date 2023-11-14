<?php

namespace App;

class User
{
    public function __construct(public string $username, protected string $password)
    {
    }

    public function __serialize(): array
    {
        echo 'Serializing user with __serialize' . PHP_EOL;

        return [
            'user' => $this->username,
            'pass' => $this->password
        ];
    }

    public function __sleep(): array
    {
        echo 'Going to sleep...' . PHP_EOL;

        return ['username', 'password'];
    }

    public function __wakeup(): void
    {
        echo 'Waking up,,,' . PHP_EOL;
    }

    public function __unserialize(array $data): void
    {
        echo 'Unserializing user with __unserialize' . PHP_EOL;

        $this->username = $data['user'];
        $this->password = $data['pass'];

        echo 'Doing anything else which is necessary...' . PHP_EOL;
    }
}