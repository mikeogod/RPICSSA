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
	return View::make('home');
});

Route::get('/home', function(){
	return View::make('home');
});

Route::get('about', "HomeController@About");
Route::get('officers/{id?}', "HomeController@Officers");

Route::get('/helloWorld', function()
{
	return "Hello World!";
});



