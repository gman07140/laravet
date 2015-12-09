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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clients', 'ClientsController@index');

// RESTful pages use this
Route::resource('clients', 'ClientsController');

// nested REST for numbers
Route::resource('clients.numbers', 'NumbersController');

// nested REST for editing pets
Route::resource('clients.pets', 'PetsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);