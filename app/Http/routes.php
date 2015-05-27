<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('lists/new', 'TodoListsController@create');
Route::post('lists', 'TodoListsController@store');
Route::get('lists/{id}', 'TodoListsController@show');
Route::post('items', 'ItemsController@store');
Route::post('items/{id}', 'ItemsController@update');
Route::post('items/{id}/destroy', 'ItemsController@destroy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
