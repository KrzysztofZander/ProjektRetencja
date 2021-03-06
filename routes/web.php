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
Route::get('/vue','HomeController@vue');

Route::get('/tabela','ParametersController@index');
Route::post('/tabela', 'ParametersController@chart');


//Show 

Route::get('/tabela/{id}', 'Api\ParametersController@index');