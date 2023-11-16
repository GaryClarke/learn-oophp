<?php // factory-method.php

require_once 'vendor/autoload.php';

$fileProcessor = new \App\JsonFileProcessor();

$fileProcessor->process(['some' => 'data']);