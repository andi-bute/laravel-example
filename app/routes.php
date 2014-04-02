<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('customers', 'CustomerController@getIndex');
// Route::post('customers/create', 'CustomerController@store');
Route::resource('customers', 'CustomerController', array('only' => array('index', 'show', 'store','update')));