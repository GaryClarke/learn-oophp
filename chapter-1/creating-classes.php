<?php // creating-classes.php

class Product
{
    public $name = 'soap';
    public $price = 10;
}

# Challenge
# 1. Create a price property and give it a default integer value
# 2. Access the price on a product object and print it
$product = new Product();
print $product->price . "\n";
# 3. Change the price
$product->price = 5;
# 4. Access the (new) price on a product object and print it
print $product->price . "\n";
