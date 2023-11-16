<?php // src/NewStuff/NewFileWriterInterface.php

namespace App\NewStuff;

interface NewFileWriterInterface
{
    public function write($data): void;
}