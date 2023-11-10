<?php // exceptions.php

require_once 'JsonFileReader.php';

$reader = new JsonFileReader();
$items = $reader->readFileAsAssociativeArray('foo.json');

print_r($items);