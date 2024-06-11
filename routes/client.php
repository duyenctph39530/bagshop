<?php

use Fpt\ThoiTrang\Controllers\Client\AboutController;
use Fpt\ThoiTrang\Controllers\Client\ContactController;
use Fpt\ThoiTrang\Controllers\Client\HomeController;
use Fpt\ThoiTrang\Controllers\Client\ProductController;

$router->get('/', HomeController::class . '@index');

$router->get('/about', AboutController::class . '@index');

$router->get('/contact', ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');



$router->mount('/products', function() use ($router){
$router->get('/', ProductController::class . '@index');
$router->get('/{id}/detail', ProductController::class . '@detail');
$router->get('/about', ProductController::class . '@about');
$router->get('/contact', ProductController::class . '@contact');

$router->get('/small/(\d+)', ProductController::class . '@small');
$router->get('/medium', ProductController::class . '@medium');
$router->get('/big', ProductController::class . '@big');
$router->get('/wallet', ProductController::class . '@wallet');
$router->get('/backpack', ProductController::class . '@backpuck');

});
// $router->get('/', HomeController::class . '@index');
