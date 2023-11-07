<?php // constructors.php

class Product
{
    public function __construct($name = 'Soap', $price = 100)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor = 1, $currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}
# give the constructor arguments default values
# use named arguments to only pass a price argument
$product = new Product(price: 200);
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;