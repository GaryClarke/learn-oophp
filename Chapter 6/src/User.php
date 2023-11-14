<?php // src/User.php

namespace App;

class User
{
    public function __construct(private int $id, private string $name)
    {
    }
}