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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/pick', 'DBController@pick');
Route::post('/morn', 'DBController@morn');

Route::get('/setting', 'HomeController@setting')->name('setting');

Route::get('/log', 'HomeController@log')->name('log');
Route::get('/log_detail', 'HomeController@log_detail')->name('log_detail');

Route::get('/privilege', 'HomeController@privilege')->name('privilege');
Route::get('/py', 'PythonController@test')->name('pr');

Route::post('/setting','DBController@setting');
