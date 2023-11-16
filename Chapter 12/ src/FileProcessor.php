<?php // src/FileProcessor.php

namespace App;

use App\OldStuff\FileWriter;

abstract class FileProcessor
{
    abstract public function createFileWriter(): FileWriter;

    public function process($data = [])
    {
        // Obtain a file writer
        $fileWriter = $this->createFileWriter();

        print 'Doing some processing now...' . PHP_EOL;

        // Now, use the file-writer.
        return $fileWriter->writeToFile($data);
    }
}