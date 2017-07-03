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

//Direct routing
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@getcontact');
Route::get('/team', 'PagesController@team');
Route::get('/webdevelopment', 'PagesController@webdevelopment');
Route::get('/e-maintenance', 'PagesController@emaintenance');
Route::get('/e-cleaning', 'PagesController@ecleaning');
Route::get('/sware-plus', 'PagesController@swareplus');
Route::get('/solo', 'PagesController@solo');
Route::get('/multi', 'PagesController@multi');

//User Portal routing
Route::get('/up', 'UPController@upHome');

//Order associated routing
Route::resource('/order', 'OrdersController');

Auth::routes();
