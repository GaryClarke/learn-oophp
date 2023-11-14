<?php // collections.php

require_once 'vendor/autoload.php';

$cities = [
    'frankfurt' => new \App\City(name: 'Frankfurt', country: 'Germany', population: 3000000),
    'mumbai' => new \App\City(name: 'Mumbai', country: 'India', population: 120000000),
    'valencia' => new \App\City(name: 'Valencia', country: 'Spain', population: 1000000)
];

$citiesCollection = new \App\Collection($cities);

print count($citiesCollection) . PHP_EOL;
dump($citiesCollection->getKeys());
dump($citiesCollection->first());
dump($citiesCollection->last());

$citiesCollection->remove('frankfurt');
$citiesCollection->set('london', new \App\City('London', 'UK', 10000000));
dump($citiesCollection->toArray());




