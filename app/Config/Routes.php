<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Shield\Controllers\LoginController;
use App\Controllers\RegisterController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/home', 'Home::home');
$routes->get('/add-user', 'Home::viewAddUser');

$routes->post('/login', [LoginController::class, 'loginAction']);
$routes->post('/logout', [LoginController::class, 'logoutAction']);
$routes->post('/user', [RegisterController::class, 'registerAction']);

service('auth')->routes($routes, ['except' => ['login, register']]);
