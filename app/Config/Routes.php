<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index');
$routes->get('/menu', 'MenuController::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');

$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::register');

$routes->get('/logout', 'AuthController::logout');

$routes->get('/profile', 'DashboardController::index');
$routes->get('/admin', 'DashboardController::index');

// admin user maintenance
$routes->get('/user/add', 'UserController::add');
$routes->post('/user/add', 'UserController::add');
$routes->get('/user/edit/(:num)', 'UserController::edit/$1');
$routes->post('/user/edit/(:num)', 'UserController::edit/$1');
$routes->get('/user/delete/(:num)', 'UserController::delete/$1');

