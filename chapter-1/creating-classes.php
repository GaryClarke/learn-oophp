<?php // class-methods.php

class Product
{
    public $name = 'soap';
    public $price = 100;

    public function priceAsCurrency($divisor = 1, $currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}
# challenge: give $divisor a default value
# test it out by passing and not passing
$product = new Product();
print $product->priceAsCurrency(currencySymbol: '£') . PHP_EOL;

