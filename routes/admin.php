<?php
use Fpt\ThoiTrang\Controllers\Admin\DashboardController;
use Fpt\ThoiTrang\Controllers\Admin\ProductController;
use Fpt\ThoiTrang\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->put('/{id}', UserController::class . '@update');
        $router->post('/{id}/delete', UserController::class . '@delete');

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


