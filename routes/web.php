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

Route::get('/register', 'RegistrationController@register')->name('get_register');
Route::post('/register', 'RegistrationController@Store')->name('register');
Route::get('/login', 'LoginController@login')->name('get_login');
Route::post('/login', 'LoginController@doLogin')->name('do_login');
