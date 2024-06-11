<?php

use Fpt\ThoiTrang\Controllers\Client\AboutController;
use Fpt\ThoiTrang\Controllers\Client\ContactController;
use Fpt\ThoiTrang\Controllers\Client\HomeController;
use Fpt\ThoiTrang\Controllers\Client\ProductController;
use Fpt\ThoiTrang\Controllers\Client\UsersController;

$router->get('/', HomeController::class . '@index');

$router->get('/about', AboutController::class . '@index');

$router->get('/contact', ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');

// Sản phẩm

$router->mount('/products', function() use ($router){
    $router->get('/', ProductController::class . '@index');
    $router->get('/{id}/detail', ProductController::class . '@detail');
    $router->get('/about', ProductController::class . '@about');
    $router->get('/contact', ProductController::class . '@contact');
    
    $router->get('/small/{idCategory}', ProductController::class . '@small');
    $router->get('/medium/{idCategory}', ProductController::class . '@medium');
    $router->get('/big/{idCategory}', ProductController::class . '@big');
    $router->get('/wallet/{idCategory}', ProductController::class . '@wallet');
    $router->get('/backpuck/{idCategory}', ProductController::class . '@backpuck');
    
    });$router->get('/products', ProductController::class . '@index');
$router->get('/products/{id}', ProductController::class . '@detail');

// Tài khoản

$router->get('/register',  UsersController::class . '@create');
$router->get('/login', UsersController::class . '@login');
$router->post('/register/store',  UsersController::class . '@store');
$router->post('/login/store', UsersController::class . '@loginStore');

// Đăng xuất
$router->get('/logout', UsersController::class . '@logout');


// $router->get('/', HomeController::class . '@index');
