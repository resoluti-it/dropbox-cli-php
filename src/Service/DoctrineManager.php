<?php

namespace App\Service;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DoctrineManager
{
    public function __construct()
    {
        $this->params = [
            'driver' => $_ENV['DB_DRIVER'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'dbname' => $_ENV['DB_NAME'],
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT']
        ];

        $this->entityPath = realpath(__DIR__ . "/../Entity");
    }

    public function getDoctrine(): EntityManager
    {
        $config = Setup::createAnnotationMetadataConfiguration([$this->entityPath], true, null, null, false);

        $entityManager = EntityManager::create($this->params, $config);

        return $entityManager;
    }
}
