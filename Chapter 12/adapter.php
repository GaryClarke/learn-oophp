
<?php // adapter.php

require_once 'vendor/autoload.php';

$fileWriter = new \App\NewStuff\NewCsvFileWriter();
$fileWriter = new \App\NewStuff\NewFileWriterAdapter($fileWriter);

$processor = new \App\OldStuff\ExampleProcessor($fileWriter);
$processor->process(['foo' => 'bar']);