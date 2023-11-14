<?php // __serialize.php

require_once 'vendor/autoload.php';

$user = new \App\User(username: 'garyclarketech', password: 'password');

$serializedUser = serialize($user);