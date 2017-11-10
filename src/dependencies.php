<?php
// DIC configuration

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
    $settings = $c->get('settings')['db'];
    $db = new PDO("mysql:host=$settings[host];dbname:$settings[dbname]",
        $settings['user'], $settings['pass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
};


