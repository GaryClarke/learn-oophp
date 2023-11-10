<?php // errors.php

require_once 'JsonFileReader.php';

try {

    $reader = new JsonFileReader();
    $data = $reader->readFileAsAssociativeArray('inventory.json');

    $div = 100 / 0;

} catch (ArgumentCountError|TypeError $error) {

    print 'Error ' . $error->getMessage() . PHP_EOL;

} catch (Error $error) {

    print 'Error ' . $error->getMessage() . PHP_EOL;
}
