<?php // null-object.php

use App\OldStuff\NullFileWriter;

require_once 'vendor/autoload.php';

$processor = new \App\OldStuff\ExampleProcessor(new NullFileWriter());
$processor->process(['foo' => 'bar']);
