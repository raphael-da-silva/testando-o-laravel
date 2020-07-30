<?php

use Illuminate\Support\Facades\Route;

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

/**
 *
 * Rotas para o usuário logado
 *
 */
Route::get('/', 'HomeController@index')->middleware('auth');
Route::get('/home', 'HomeController@index')->middleware('auth');

/**
 *
 * Rotas públicas
 *
 */
Route::get('/about', 'AboutController@index');

/**
 *
 * 404
 *
 */
Route::fallback(function(){

	return view('404');

});

/**
 *
 * Rotas de autenticação
 *
 */
Auth::routes();