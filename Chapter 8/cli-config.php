<?php // cli-config.php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'vendor/autoload.php';

$conn = \App\MySQL\Connection::getInstance();

return ConsoleRunner::createHelperSet($conn->getEntityManager());