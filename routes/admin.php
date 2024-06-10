<?php

use Fpt\ThoiTrang\Controllers\Admin\CategoryController;
use Fpt\ThoiTrang\Controllers\Admin\DashboardController;
use Fpt\ThoiTrang\Controllers\Admin\ProductController;
use Fpt\ThoiTrang\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}/show', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->post('/{id}/update', UserController::class . '@update');
        $router->get('/{id}/delete', UserController::class . '@delete');
    });
});

$router->mount('/admin', function () use ($router) {
    $router->get('/', DashboardController::class . '@dashboard');

    $router->mount('/products', function () use ($router) {
        $router->get('/', ProductController::class . '@index');
        $router->get('/create', ProductController::class . '@create');
        $router->post('/store', ProductController::class . '@store');
        $router->get('/{id}/show', ProductController::class . '@show');
        $router->get('/{id}/edit', ProductController::class . '@edit');
        $router->post('/{id}/update', ProductController::class . '@update');
        $router->get('/{id}/delete', ProductController::class . '@delete');
    });
});

$router->mount('/admin', function () use ($router) {
    $router->mount('/categorys', function () use ($router) {
        $router->get('/', CategoryController::class . '@index');
        $router->get('/create', CategoryController::class . '@create');
        $router->post('/store', CategoryController::class . '@store');
        $router->get('/{id}/show', CategoryController::class . '@show');
        $router->get('/{id}/edit', CategoryController::class . '@edit');
        $router->post('/{id}/update', CategoryController::class . '@update');
        $router->get('/{id}/delete', CategoryController::class . '@delete');
    });
});
