<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . "/../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration
$isDevMode = true;
$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/../config/xml"), $isDevMode);


// $mypsw = '%env(DATABASE_PASSWORD)%';

// database configuration parameters
// $conn = array(
//     'driver' => 'pdo_mysql',
//     'user' => 'emeu17',
//     'password' => 'psw-connecttosecret',
//     'host' => 'blu-ray.student.bth.se',
//     'port' => 3306,
//     'dbname' => 'emeu17',
// );


// $conn = array(
//     'url' => 'mysql://emeu17:HAGXf6ydprJV@blu-ray.student.bth.se:3306/emeu17',
// );

$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../db/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
