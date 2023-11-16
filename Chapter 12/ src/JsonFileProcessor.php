<?php // src/JsonFileProcessor.php

namespace App;

use App\OldStuff\FileWriter;
use App\OldStuff\JsonFileWriter;

class JsonFileProcessor extends FileProcessor
{
    public function createFileWriter(): FileWriter
    {
        return new JsonFileWriter();
    }
}