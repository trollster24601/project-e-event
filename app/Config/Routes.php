<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::register');
$routes->get('/auth/register', 'AuthController::register');
$routes->post('/auth/register', 'AuthController::postRegister');
$routes->get('/auth/login', 'AuthController::login');
$routes->get('/admin/kelola/user', 'AdminController::user');
$routes->get('/admin/kelola/eo', 'AdminController::eo');
$routes->get('/admin/dashboard', 'AdminController::index');
$routes->get('/eo/dashboard', 'EoController::index');
$routes->get('/user/dashboard', 'UserController::index');
$routes->get('/user/event/deskripsi', 'UserController::eventDescription');
