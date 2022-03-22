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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/categorias','CategoriasController@index')->name('categorias');
Route::get('/categorias/create','CategoriasController@create')->name('categoria.create');
Route::post('/categorias/store','CategoriasController@store')->name('categoria.store');

Route::get('/categorias/edit/{cat_id}','CategoriasController@edit')->name('categorias.edit');

Route::post('/categorias/update/{cat_id}','CategoriasController@update')->name('categoria.update');

Route::post('/categorias/destroy/{cat_id}','CategoriasController@destroy')->name('categoria.destroy');

Route::get('/movimientos','MovimientosController@index')->name('movimientos');

Route::get('/movimientos/create','MovimientosController@create')->name('movimientos.create');

