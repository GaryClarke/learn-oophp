<?php // src/OldStuff/JsonFileWriter.php

namespace App\OldStuff;

class JsonFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        print PHP_EOL . 'Writing to JSON file...' . PHP_EOL;

        sleep(2);

        return true;
    }
}