<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Shield\Controllers\LoginController;
use App\Controllers\RegisterController;

/**
 * @var RouteCollection $routes
 */
$routes->group('admin', ['filter' => 'group:admin'], static function ($routes) {
    $routes->get('home', 'Home::home');
    $routes->get('add-user', 'Home::viewAddUser');
    $routes->post('user', [RegisterController::class, 'registerAction']);
});

$routes->group('user', ['filter' => 'group:user'], static function ($routes) {
    $routes->get('/', 'Home::index');
});

// $routes->get('login', 'Home::login');
$routes->post('login', [LoginController::class, 'loginAction']);
$routes->get('logout', [LoginController::class, 'logoutAction']);

service('auth')->routes($routes, ['except' => []]);
