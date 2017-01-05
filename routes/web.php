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

//Tannery

Route::get('/{lang}/tannery', 'TanneryController@index')->name('tannery');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/tannery/edit', 'TanneryController@edit')->name('tannery.edit')->middleware('auth');
Route::post('/{lang}/tannery/update', 'TanneryController@update')->name('tannery.update')->middleware('auth');

//Shop

Route::get('/{lang}/shop', 'ShopController@index')->name('shop');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/shop/edit', 'ShopController@edit')->name('shop.edit')->middleware('auth');
Route::post('/{lang}/shop/update', 'ShopController@update')->name('shop.update')->middleware('auth');

//Exhibitions
Route::get('/{lang}/exhibitions', 'ExhibitionsController@index')->name('exhibitions');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/exhibitions/edit', 'ExhibitionsController@edit')->name('exhibitions.edit')->middleware('auth');
Route::post('/{lang}/exhibitions/update', 'ExhibitionsController@update')->name('exhibitions.update')->middleware('auth');

Route::get('/{lang}/list', 'ListController@index')->name('list');
Route::get('/{lang}/list/edit', 'ListController@edit')->name('list.edit')->middleware('auth');
Route::post('/{lang}/list/update', 'ListController@update')->name('list.update')->middleware('auth');


//Courses
Route::get('/{lang}/courses', 'CoursesController@index')->name('courses');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/courses/edit', 'CoursesController@edit')->name('courses.edit')->middleware('auth');
Route::post('/{lang}/courses/update', 'CoursesController@update')->name('courses.update')->middleware('auth');

//Books

Route::get('/{lang}/books', 'BooksController@index')->name('books');
//Route::get('/{lang}', 'WelcomeController@indexEn');
Route::get('/{lang}/books/edit', 'BooksController@edit')->name('books.edit')->middleware('auth');
Route::post('/{lang}/books/update', 'BooksController@update')->name('books.update')->middleware('auth');


//Course

Route::get('/se/course/create', 'CourseController@create')->name('course.create');
Route::post('/se/course/store', 'CourseController@store')->name('course.store');
Route::post('/se/course/update', 'CourseController@update')->name('course.update');
Route::get('/se/course/{id}/edit', 'CourseController@edit')->name('course.edit');
Route::delete('/se/course/{id}/delete', 'CourseController@delete')->name('course.delete');







