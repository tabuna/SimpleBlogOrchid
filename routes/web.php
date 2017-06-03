<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$router->get('/','BlogController@index');

$router->get('/{blog}','BlogController@show')
    ->where('blog','^(?!dashboard).*$')
    ->name('blog.post');
