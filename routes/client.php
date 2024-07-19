<?php
use Fpt\ThoiTrang\Controllers\Client\AboutController;
use Fpt\ThoiTrang\Controllers\Client\ContactController;
use Fpt\ThoiTrang\Controllers\Client\HomeController;
use Fpt\ThoiTrang\Controllers\Client\ProductController;

$router->get('/', HomeController::class . '@index');

$router->get('/about', AboutController::class . '@index');

$router->get('/contact', ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');

$router->get('/products', ProductController::class . '@index');
$router->get('/products/{id}', ProductController::class . '@detail');

// $router->get('/', HomeController::class . '@index');
