<?php // get-and-set.php

require_once 'Product.php';

$product = new Product('Acme', 'Radio Knob');

/**************************************** Get ****************************************/

print $product->name . PHP_EOL;

/**************************************** Set ****************************************/

try {

    $product->rating = 6;

    print 'Rating = '  . $product->rating . PHP_EOL;

} catch (BadMethodCallException $exception) {

    print $exception->getMessage() . PHP_EOL;
}