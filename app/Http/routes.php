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

Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');
Route::get('/product', 'ProductController@index');
Route::get('/case', 'CaseController@index');
Route::get('/download', 'DownloadController@index');
Route::get('/service', 'ServiceController@index');
Route::get('/about', 'AboutController@index');
Route::get('/news', 'NewsController@index');

