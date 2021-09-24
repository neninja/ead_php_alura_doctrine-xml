<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function criaEntityManager(): EntityManagerInterface
    {
        $config = Setup::CreateAnnotationMetadataConfiguration(
            [__DIR__ . '/../Entity']
        );
        $con = [
            'driver' => 'pdo_pgsql',
            'host' => 'db', # nome no docker-compose.yml
            'dbname' => 'ead_php_alura_doctrine-xml',
            'user' => 'root',
            'password' => '123'
        ];

        return EntityManager::create($con, $config);
    }
}
