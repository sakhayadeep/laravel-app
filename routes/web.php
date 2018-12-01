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



/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>hello world!</h1>";
});

Route::get('/user/{id}', function ($id) {
    
    return "<h1>hello $id</h1>";
});
*/

Route::get('/', 'PagesController@index');

Route::get('/services','PagesController@services');

Route::get('/about', 'PagesController@about');

Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
