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

Route::get('/', 'TestController@index');

Route::get('/tests', 'TestController@index')->name('test.list');
Route::get('/test/new', 'TestController@create')->name('test.new');
Route::get('/test/{id}', 'TestController@show')->name('test.show');
Route::get('/test/delete', 'TestController@delete')->name('test.delete');
Route::post('/test/store', 'TestController@store')->name('test.store');
