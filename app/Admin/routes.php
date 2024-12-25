<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\PrintController;
use App\Admin\Controllers\ApiController;
use Dcat\Admin\Models\ScaffoldRoute;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');

    $routes = ScaffoldRoute::where('prefix',config('admin.route.prefix'))->get();
    foreach ($routes as $route){
        $router->resource($route->route,$route->class);
    }
		   
});
