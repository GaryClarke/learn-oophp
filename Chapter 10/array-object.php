<?php // array-object.php

require_once 'vendor/autoload.php';

$cities = [
    new \App\City(name: 'Frankfurt', country: 'Germany', population: 3000000),
    new \App\City(name: 'Mumbai', country: 'India', population: 120000000),
    new \App\City(name: 'Valencia', country: 'Spain', population: 1000000)
];

$citiesObject = new ArrayObject($cities);

$citiesObject[] = new \App\City(name: 'London', country: 'UK', population: 10000000);

unset($citiesObject[0]);

foreach ($citiesObject as $city) {

    print "{$city->getName()}: {$city->getPopulation()}" . PHP_EOL;
}

print count($citiesObject) . PHP_EOL;