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

Route::get('/', 'HomeController@index' );
Route::get('/home', 'HomeController@index' );
Route::get('/inicio', 'HomeController@index' );
Route::get('/galeria', 'GaleriaController@index' );
Route::get('/explore', 'ExploreController@index' );
Route::get('/reservas', 'ReservasController@index' );
Route::get('/contato', 'ContatoController@index' );