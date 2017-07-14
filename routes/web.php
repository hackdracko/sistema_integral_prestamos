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
Route::get('/api/login/{id}', 'UsuarioController@login');
Route::get('/api/tester/{id}', 'UsuarioController@test');
Route::get('/api/grupo/{id}', 'UsuarioController@grupo');
Route::get('/api/getCatalogs', 'UsuarioController@getCatalogs');
Route::post('/api/grupoFormacion/create', 'GrupoFormacionController@createGroup');
