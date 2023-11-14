<?php // __serialize.php

require_once 'vendor/autoload.php';

$user = new \App\User(username: 'garyclarketech', password: 'password');

$serializedUser = serialize($user);

$unserializedUser = unserialize($serializedUser);

dd($unserializedUser);

// Add __sleep and __wakeup methods to User
// Add echo statements to print out when they are being called
// What do you observe?
