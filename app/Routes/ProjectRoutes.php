<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('project/', ['namespace' => 'App\Controllers'], static function ($routes) {
    //home page route
    $routes->get('home', 'DashboardController::index');

    $routes->get('/', 'PostController::index');
    $routes->get('post/create', 'PostController::create');
    $routes->get('post/edit/(:segment)', 'PostController::edit/$1');
    $routes->get('post/view/(:segment)', 'PostController::view/$1');
    $routes->get('post/delete/(:segment)', 'PostController::delete/$1');

    $routes->get('user/register', 'UserController::register');
    $routes->get('user/login', 'UserController::login');
    $routes->get('user/profile/(:segment)', 'UserController::profile/$1');

    $routes->get('comment/add/(:segment)', 'CommentController::add/$1');
    $routes->get('comment/list/(:segment)', 'CommentController::list/$1');

    $routes->get('category', 'CategoryController::index');
    $routes->get('category/create', 'CategoryController::create');
    $routes->get('category/edit/(:segment)', 'CategoryController::edit/$1');
    $routes->get('category/delete/(:segment)', 'CategoryController::delete/$1');

    $routes->get('tag', 'TagController::index');
    $routes->get('tag/create', 'TagController::create');
    $routes->get('tag/edit/(:segment)', 'TagController::edit/$1');  
    $routes->get('tag/delete/(:segment)', 'TagController::delete/$1');
});
//routes end