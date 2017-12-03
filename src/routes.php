<?php

use Supermarket\resources;
use Slim\Http\Request;
use Slim\Http\Response;

// Routes Franchise
$app->get('/franchise', function (Request $request, Response $response) {
    $this->logger->info("Get Franchise");

    $resource = new resources\FranchiseResource($this->db);
    $franchises = $resource->getAll($request);

    // Set Content type Header
    $response = $response->withHeader('Content-type', 'application/json');

    // Render default view
    return $this->view->render($response, 'default.phtml', ['result' => $franchises]);
});

$app->post('/franchise', function(Request $request, Response $response) {
    $this->logger->info("Post Franchise");

    $resource = new resources\FranchiseResource($this->db);
    $franchise = $resource->post($request);

    // Set Content type Header
    $response = $response->withHeader('Content-type', 'application/json');

    // Render default view
    return $this->view->render($response, 'default.phtml', ['result' => $franchise]);
});


$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
