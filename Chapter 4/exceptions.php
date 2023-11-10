<?php // exceptions.php

require_once 'JsonFileReader.php';

try {

    $reader = new JsonFileReader();
    $items = $reader->readFileAsAssociativeArray('foo.json');

    print_r($items);
    
} catch (Exception $exception) {

    print $exception->getMessage() . PHP_EOL;
}