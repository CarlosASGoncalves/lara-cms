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
Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@index');

Route::get('/authors', 'AuthorsController@index');
Route::get('/authors/add', 'AuthorsController@add');
Route::post('/authors', 'AuthorsController@store');
//Route::post('/authors', 'AuthorsController@edit');
//Route::post('/authors', 'AuthorsController@delete');

