<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/v1/product',"ProductController@showAll");
$router->get('/api/v1/product-category',"ProductController@showproductcategory");

$router->get('/api/v1/product/{id}',"ProductController@show");
$router->post('/api/v1/product',"ProductController@save");
$router->put('/api/v1/product/{id}',"ProductController@update");
$router->delete('/api/v1/product/{id}',"ProductController@delete");