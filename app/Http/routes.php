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

Route::get('/', 'LoginController@index');

Route::get('home/{id}', 'HomeController@index');
Route::get('temas', 'TemaController@index');
Route::get('relevantes', 'HomeController@config');
Route::get('recados', 'HomeController@config');
Route::get('alertas', 'HomeController@config');
Route::get('config', 'HomeController@config');
