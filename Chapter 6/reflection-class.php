<?php // reflection-class.php

use App\Admin;

require_once 'vendor/autoload.php';

$adminClass = new \ReflectionClass(Admin::class);

$className = $adminClass->getName();

$shortName = $adminClass->getShortName();

$params = $adminClass->getMethod('__construct')->getParameters();

$methods = $adminClass->getMethods();

$method = $methods[2];

$parentClass = $adminClass->getParentClass();
$startLine = $adminClass->getStartLine();
$endLine = $adminClass->getEndLine();
$interfaces = $adminClass->getInterfaceNames();
$length = $endLine - $startLine + 1;

$classTxt = '/Users/gc/Sites/chapter6/AdminClass.txt';

$content = "Class name: " . $adminClass->getName() . PHP_EOL;
$content .= "Parent class name: " . $adminClass->getParentClass()->getName() . PHP_EOL;
$content .= "Interface names: " . implode(', ', $adminClass->getInterfaceNames()) . PHP_EOL;
$content .= "Trait names: " . implode(', ', $adminClass->getTraitNames()) . PHP_EOL;
$content .= "Trait aliases: " . implode(', ', $adminClass->getTraitAliases()) . PHP_EOL;
$content .= "Static properties: " . implode(', ', $adminClass->getStaticProperties()) . PHP_EOL;
$content .= "Default properties: " . implode(', ', $adminClass->getDefaultProperties()) . PHP_EOL;
$adminClass->isCloneable() ? $content .= 'Is Cloneable' . PHP_EOL : $content .= 'Not cloneable' . PHP_EOL;
$adminClass->isInstantiable() ? $content .= 'Is Instantiable' . PHP_EOL : $content .= 'Not instantiable' . PHP_EOL;
$adminClass->isInternal() ? $content .= 'Internal' . PHP_EOL : $content .= 'Not internal' . PHP_EOL;
$content .= "File name: " . $adminClass->getFileName() . PHP_EOL;
$content .= "Start line: " . $adminClass->getStartLine() . PHP_EOL;
$content .= "End line: " . $adminClass->getEndLine() . PHP_EOL;
$content .= "Length: " . $length . PHP_EOL;
$content .= "Short name: " . $shortName . PHP_EOL;

fwrite(fopen($classTxt, 'w'), $content);