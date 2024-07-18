<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('project/', ['namespace' => 'App\Controllers'], static function ($routes) {
    //home page route
    $routes->get('home', 'DashboardController::index');
    $routes->get('blog', 'BlogController::index');
    $routes->get('blog/view/(:segment)', 'BlogController::view/$1');

});
//routes end