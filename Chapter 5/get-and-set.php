<?php // get-and-set.php

require_once 'Product.php';

$product = new Product('Acme', 'Radio Knob');

print $product->name . PHP_EOL;
