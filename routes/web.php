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

Route::get('paciente/{id}/destroy', [
	'uses' => 'PacienteController@destroy',
	'as' => 'paciente.destroy'
]);

Route::get('paciente/{id}/update', [
	'uses' => 'PacienteController@update',
	'as' => 'paciente.update'
]);

Route::get('paciente/{id}/select', [
	'uses' => 'PacienteController@select',
	'as' => 'paciente.select'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/***********************************************************************/

Route::get('paciente/{id}/{level}/postura', [
	'uses' => 'PacienteController@postura',
	'as' => 'paciente.postura'
]);

Route::get('paciente/cara/{id}/{level}', [
	'uses' => 'PacienteController@cara',
	'as' => 'paciente.cara'
]);

Route::get('paciente/sonido/{id}/{level}', [
	'uses' => 'PacienteController@sonido',
	'as' => 'paciente.sonido'
]);

Route::get('paciente/palabra/{id}/{level}', [
	'uses' => 'PacienteController@palabra',
	'as' => 'paciente.palabra'
]);

Route::get('paciente/createstics/{id}/{level}', [
	'uses' => 'PacienteController@createstics',
	'as' => 'paciente.createstics'
]);

Route::get('paciente/estadisticas/{id}/{level}', [
	'uses' => 'PacienteController@estadisticas',
	'as' => 'paciente.estadisticas'
]);