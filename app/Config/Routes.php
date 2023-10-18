<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth/register', 'AuthController::register');
$routes->post('/auth/register', 'AuthController::postRegister');
$routes->get('/auth/login', 'AuthController::login');