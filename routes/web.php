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
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/', function(){return redirect('/se');});
Route::get('/{lang}', 'WelcomeController@index')->name('welcome');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/edit', 'WelcomeController@edit')->name('welcome.edit')->middleware('auth');
Route::post('/{lang}/update', 'WelcomeController@update')->middleware('auth');
Route::post('/imgStore', 'WelcomeController@imgStore')->middleware('auth');


Route::get('/{lang}/tannery', function () {
    return 'Hello World';
});


