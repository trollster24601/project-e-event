<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  index route
 $routes->get('/', 'UserController::register');

$routes->get('/users/register', 'UserController::register');
$routes->post('/users/register', 'UserController::postRegister');