<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('project/', ['namespace' => 'App\Controllers'], static function ($routes) {
    //home page route
    $routes->get('home', 'DashboardController::index');
});
//routes end