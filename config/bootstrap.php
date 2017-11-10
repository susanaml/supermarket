<?php
/**
 * Created by PhpStorm.
 * User: susana
 * Date: 27/05/17
 * Time: 19:06
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . "/../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src/Supermarket/entities"), $isDevMode, null, null, false);

// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'gate2311',
    'dbname'   => 'supermarket',
    'host'     => 'localhost',
    'charset'  => 'UTF8'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);