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


Route::get('/login/hod', 'Auth\LoginController@showHodLoginForm');
    Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
    Route::get('/register/hod', 'Auth\RegisterController@showHodRegisterForm');
    Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

    Route::post('/login/hod', 'Auth\LoginController@hodLogin');
    Route::post('/login/student', 'Auth\LoginController@studentLogin');
    Route::post('/register/hod', 'Auth\RegisterController@createHod');
    Route::post('/register/student', 'Auth\RegisterController@createStudent');

    Route::view('/home', 'home')->middleware('auth');
    Route::get('/hod', 'HodController@index');
    Route::view('/student', 'student');

    Route::view('/confirm','confirm');

    Route::get('/hod/past','HodController@showPast');
    Route::get('/student', 'StudentController@showHome');
