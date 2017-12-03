<?php
// DIC configuration

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$container = $app->getContainer();

// view renderer
$container['view'] = function ($c) {
    return new Slim\Views\PhpRenderer('../templates/');
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// database
$container['db'] = function ($c) {
    // Create a simple "default" Doctrine ORM configuration for Annotations
    // Create a simple "default" Doctrine ORM configuration for Annotations
    $isDevMode = true;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities"), $isDevMode, null, null, false);

    // database configuration parameters
    $conn = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => '',
        'dbname'   => 'supermarket',
        'host'     => 'localhost',
        'charset'  => 'UTF8'
    );

    // obtaining the entity manager
    $entityManager = EntityManager::create($conn, $config);

    return $entityManager;
};


