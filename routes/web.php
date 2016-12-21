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

Route::get('/', 'WelcomeController@index');
Route::get('/edit', 'WelcomeController@edit');
Route::post('/update', 'WelcomeController@update');
Route::post('/imgStore', 'WelcomeController@imgStore');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/en', 'HomeController@index');
