<?php // inspecting-classes.php

require_once 'vendor/autoload.php';

//$exists = class_exists('App\User');
$exists = class_exists(\App\User::class);

$unknownObject = \App\UserFactory::create(5, 'Gary');

$className = get_class($unknownObject);

$isUser = $unknownObject instanceof \App\User;

$admin = new \App\Admin(5, 'Gary');

$parentClass = get_parent_class($admin);

$isSubclass = is_subclass_of($admin, \App\User::class);

$classImplements = class_implements($admin);

$isUserInstance = is_a($admin, \App\AuthenticatedUserInterface::class);

dd($isUserInstance);