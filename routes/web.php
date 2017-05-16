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

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/team', 'PagesController@team');
Route::get('/webdevelopment', 'PagesController@webdevelopment');
Route::get('/e-maintenance', 'PagesController@emaintenance');
Route::get('/home', 'HomeController@index');

Auth::routes();
