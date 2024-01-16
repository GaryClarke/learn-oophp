<?php // src/MySQL/Connection.php

namespace App\MySQL;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class Connection
{
    private static ?self $instance = null;
    private EntityManager $entityManager;

    private function __construct()
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(dirname(__DIR__)),
            isDevMode: true
        );

        $connection = [
            'url' => 'mysql://root@localhost:3306/doctrine-demo?charset=utf8mb4',
        ];

        $this->entityManager = new EntityManager($connection, $config);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }
}