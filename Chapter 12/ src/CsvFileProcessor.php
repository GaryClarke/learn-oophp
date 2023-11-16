<?php // src/CsvFileProcessor.php

namespace App;

use App\OldStuff\CsvFileWriter;
use App\OldStuff\FileWriter;

class CsvFileProcessor extends FileProcessor
{
    public function createFileWriter(): FileWriter
    {
        return new CsvFileWriter();
    }
}