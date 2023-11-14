<?php // src/UserFactory.php

namespace App;

class UserFactory
{
    public static function create(int $id, string $name): User
    {
        return new User($id, $name);
    }
}