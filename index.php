<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;

/**
 * Inicio do bang :)
 * @var string
 */
$app->post('/', function (Request $request, Response $response) use ($app) {
    $body = $request->getBody();
    $response->getBody()->write($body);
    return $response;
});

$app->run();