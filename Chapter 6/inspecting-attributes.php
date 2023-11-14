<?php // inspecting-attributes.php

require_once 'vendor/autoload.php';

$user = new \App\User(5, 'Gary');

$classMethods = get_class_methods($user);

$methodExists = method_exists($user, 'setPassword');

$isCallable = is_callable([$user, 'setPassword']);

$props = get_class_vars(\App\User::class);

$objectVars = get_object_vars($user);

dd($objectVars);
