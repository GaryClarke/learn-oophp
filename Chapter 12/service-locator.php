<?php // service-locator.php

declare(strict_types=1);

require_once 'bootstrap.php';

$serviceLocator = new \App\ServiceLocator();
$serviceLocator->addInstance(\App\OldStuff\FileWriter::class, new \App\OldStuff\CsvFileWriter());
$fileWriter = $serviceLocator->get(\App\OldStuff\FileWriter::class);

$serviceLocator->addClass(\App\OldStuff\ExampleProcessor::class, [$fileWriter]);

// Check if ServiceLocator has ExampleProcessor...print result
print $serviceLocator->has(\App\OldStuff\ExampleProcessor::class) . PHP_EOL;
// Retrieve the ExampleProcessor from the ServiceLocator
$processor = $serviceLocator->get(\App\OldStuff\ExampleProcessor::class);
// Call the process method on the ExampleProcessor with ['some' => 'data']
$processor->process(['some' => 'data']);
// Switch the JsonFileWriter for A CsvFileWriter and re-run