<?php

use Supermarket\resources;

// Routes
$app->get('/franchise', function ($request, $response, $args) {
    $this->logger->info("Franchise '/franchise' route");

    $resource = new resources\FranchiseResource();
    $franchises = $resource->getAll($request);

    // Set Content type Header
    $response = $response->withHeader('Content-type', 'application/json');

    // Render default view
    return $this->view->render($response, 'default.phtml', ['result' => $franchises]);
});


$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
