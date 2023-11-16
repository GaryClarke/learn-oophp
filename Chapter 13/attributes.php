<?php // attributes.php

use App\DTO\UserRegistration;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration('Gary', 'gary@example.com');

$userRegistration->email = 'info@example.com';

dd($userRegistration);