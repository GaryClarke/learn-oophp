<?php // creating-classes.php

class Product
{
    public $name = 'soap';
    public $price; # cents

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;

        return $priceAsCurrency;
    }
}

$soapObject1 = new Product();
$soapObject1->price = 550;

$soapObject2 = new Product();
$soapObject2->price = 650;

$priceAsCurrency = $soapObject2->priceAsCurrency();
var_dump($priceAsCurrency) . PHP_EOL;
