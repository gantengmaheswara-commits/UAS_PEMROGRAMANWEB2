<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->resource('kategori');
$routes->resource('buku', ['filter' => 'auth']);
$routes->post('login', 'AuthController::login');