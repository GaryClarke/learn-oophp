<?php // exceptions.php

require_once 'JsonFileReader.php';

try {

    $reader = new JsonFileReader();
    $items = $reader->readFileAsAssociativeArray('foo.json');

    print_r($items);

} catch (FileNotFoundException|JsonException) {

//    print 'File problem: ' . $fileException->getMessage() . ' on line ' . $fileException->getLine() . ' in file ' . $fileException->getFile() . PHP_EOL;

    print 'File problem..figure it out yourself..';

} catch (Exception $exception) {

    print 'A problem occurred: ' . $exception->getMessage() . ' on line ' . $exception->getLine() . ' in file ' . $exception->getFile() . PHP_EOL;
}