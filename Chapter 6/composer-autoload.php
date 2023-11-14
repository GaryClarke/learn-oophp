<?php // composer-autoload.php

require_once 'vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

//$data = [
//    'id' => 5,
//    'name' => 'Gary'
//];

$gary = new \App\User(5, 'Gary');

VarDumper::dump($gary);