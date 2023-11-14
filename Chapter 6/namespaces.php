<?php // namespaces.php

// class name clash
require_once 'MySql/Connection.php';
require_once 'Postgres/Connection.php';

use MySql\Connection as MySqlConnection;
use Postgres\Connection as PostgresConnection;

$mySqlConnection = new MySqlConnection();
$postgresConnection = new PostgresConnection();

print $mySqlConnection->connect() . PHP_EOL;

print $postgresConnection->connect() . PHP_EOL;

// folder structure