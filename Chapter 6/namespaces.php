<?php // namespaces.php

require_once 'mysql-connection.php';
require_once 'postgresql-connection.php';

$mySqlConnection = new \MySql\Connection();

print $mySqlConnection->connect() . PHP_EOL;
