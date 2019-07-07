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
    return view('Auth/login');
});

Route::post('Auth/register', 'Auth\RegisterController@postRegister');

Route::get('username','Auth\RegisterController@verificarUser');
Route::get('email','Auth\RegisterController@verificarEmail');

Route::resource('paciente', 'PacienteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');