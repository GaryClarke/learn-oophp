<?php // call.php

require_once 'Product.php';
require_once 'JsonProductWriter.php';

$writer = new JsonProductWriter();
$product = new Product(manufacturer: 'Acme', itemName: 'radio Knob', productWriter: $writer);

print $product->write() . PHP_EOL;