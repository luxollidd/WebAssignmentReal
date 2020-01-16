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
Route::resource ('/apply', 'ApplicationController');

Route::resource ('/HOD', 'HodController');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout2');

Route::post('/HOD','HodController@approve');

Route::resource('/student','StudentController');



