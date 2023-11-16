<?php // src/OldStuff/NullFileWriter.php

namespace App\OldStuff;

class NullFileWriter extends FileWriter
{
    public function writeToFile($data): bool
    {
        // DO NOTHING

        return true;
    }
}