<?php // serialization-intro.php

require_once 'vendor/autoload.php';

// string
$string = serialize('this is a string');

// integer
$int = serialize(345);
$unserializedInt = unserialize($int);

// floating point
$floatingPoint = serialize(345.678);

// array
$array = serialize(['this', 'is', 'an', 'array', 200]);

// bool
$bool = serialize(false);