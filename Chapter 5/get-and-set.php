<?php // get-and-set.php

require_once 'Product.php';

$product = new Product('Acme', 'Radio Knob');

/**************************************** __get ****************************************/

print $product->name . PHP_EOL;

/**************************************** __set ****************************************/

try {
    $product->rating = 6;

    print 'Rating ' . $product->rating . PHP_EOL;

} catch (BadMethodCallException $exception) {

    print $exception->getMessage() . PHP_EOL;
}

/**************************************** __unset ****************************************/

unset($product->rating);

print 'Rating ' . $product->rating . PHP_EOL;