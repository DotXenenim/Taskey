<?php

use Framework\Kernel;

require __DIR__ . '/../vendor/autoload.php';

$kernel = new Kernel();
$router = $kernel->getRouter();

$router->addRoute('GET', '/', 'Welcome to Taskey!');
$router->addRoute('GET', '/about', 'Taskey is Awesome!');

// Extract the path from the URL
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (!is_string($urlPath)) {
    $urlPath = '/';
}
$request = new \Framework\Request($_SERVER['REQUEST_METHOD'], $urlPath, $_GET, $_POST);

$response = $kernel->handle($request);
$response->echo();