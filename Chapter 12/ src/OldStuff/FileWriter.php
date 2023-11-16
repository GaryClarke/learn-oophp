<?php // src/OldStuff/FileWriter.php

namespace App\OldStuff;

use App\Service;

abstract class FileWriter implements Service
{
    abstract public function writeToFile($data): bool;
}