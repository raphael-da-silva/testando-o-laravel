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
Route::middleware('auth')->group(function(){

	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');

});

/**
 *
 * Rotas públicas
 *
 */
Route::get('/about', 'AboutController@index');
Route::get('/users-list', 'UsersListController@index');
Route::get('/user/{id}', 'UserDetailsController@index');

/**
 *
 * 404
 *
 */
// Route::fallback(function(){

// 	return view('404');

// });

/**
 *
 * Rotas de autenticação
 *
 */
Auth::routes();