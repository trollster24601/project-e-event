<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/users/register', 'UserController::register');
$routes->post('/users/register', 'UserController::postRegister');
$routes->get('/users/login', 'UserController::login');