<?php // visibility.php

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();
print $subObject->publicProperty . PHP_EOL;
