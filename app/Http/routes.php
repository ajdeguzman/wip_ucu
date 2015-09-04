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

Route::get('/', 'HomeController@index');
Route::get('/about/contact-us', 'HomeController@contact');
Route::get('/about/history', 'HomeController@history');
Route::get('/about/vmgo', 'HomeController@vm');
Route::get('/about/seal', 'HomeController@seal');
Route::get('/about/hymn', 'HomeController@hymn');
Route::get('/about/maps', 'HomeController@maps');
Route::get('/about/highlights', 'HomeController@highlights');
Route::get('/about/administration', 'HomeController@administration');