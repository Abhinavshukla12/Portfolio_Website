<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('about', 'HomeController::about');
$routes->get('projects', 'ProjectController::index');
$routes->get('blog', 'BlogController::index');
$routes->get('/contact', 'HomeController::contact');
$routes->post('/contact', 'HomeController::sendContact');