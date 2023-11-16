<?php // src/OldStuff/CsvFileWriter.php

namespace App\OldStuff;

class CsvFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        print PHP_EOL . 'Writing to CSV file...' . PHP_EOL;

        sleep(2);

        return true;
    }
}