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
 * Page route Controllers
 */

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/forum', 'PagesController@forum');

Route::get('/features', 'PagesController@features');

Route::get('/play', 'PagesController@play');

Route::get('/dashboard', 'DashboardController@index');

// User account routes
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/show', 'UserController@show')->name('user.show');
Route::get('/user/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/update', 'UserController@update')->name('user.update');

/*
 * Model Routes
 */

Route::resource('posts', 'PostsController');

Auth::routes();
