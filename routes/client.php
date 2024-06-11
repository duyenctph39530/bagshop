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

$router->get('/products', ProductController::class . '@index');
$router->get('/products/{id}', ProductController::class . '@detail');

// Tài khoản

$router->get('/register',  UsersController::class . '@create');
$router->get('/login', UsersController::class . '@login');
$router->post('/register/store',  UsersController::class . '@store');
$router->post('/login/store', UsersController::class . '@loginStore');

// Đăng xuất
$router->get('/logout', UsersController::class . '@logout');





// $router->get('/', HomeController::class . '@index');
