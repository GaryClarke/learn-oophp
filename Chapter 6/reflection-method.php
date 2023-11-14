<?php // reflection-method.php

require_once 'vendor/autoload.php';

$adminClass = new \ReflectionClass(\App\Admin::class);

$parent = $adminClass->getParentClass();
$parentShortName = $parent->getShortName();
$parentMethods = $parent->getMethods();

$content = "Parent class short name: " . $parentShortName . PHP_EOL . PHP_EOL;
$content .= "Parent class methods: " . PHP_EOL . PHP_EOL;

foreach ($parentMethods as $method) {
    $content .= "Method name: " . $method->getName() . PHP_EOL;
    $content .= "Method start line: " . $method->getStartLine() . PHP_EOL;
    $content .= "Method end line: " . $method->getEndLine() . PHP_EOL;
    $content .= "Method length: " . $method->getEndLine() - $method->getStartLine() + 1 . PHP_EOL;
    if ($method->isPublic()) {
        $content .= 'Method is public' . PHP_EOL;
    }
    if ($method->isProtected()) {
        $content .= 'Method is protected' . PHP_EOL;
    }
    if ($method->isPrivate()) {
        $content .= 'Method is private' . PHP_EOL;
    }
    if ($method->isStatic()) {
        $content .= 'Method is static' . PHP_EOL;
    }

    $content .= 'Method parameters: ' . PHP_EOL;
    foreach ($method->getParameters() as $param) {
        $content .= $param->getPosition() . ': ';
        $content .= $param->getType() . ' ';
        $content .= $param->getName() . PHP_EOL;
    }

    $content .= '----------------------------------------------------' . PHP_EOL;
}

$methodText = '/Users/gc/Sites/chapter6/ReflectionMethod.txt';
fwrite(fopen($methodText, 'w'), $content);