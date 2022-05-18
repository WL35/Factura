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

Route::get('/cache', function () {

   echo Artisan::call('config:clear');
   echo Artisan::call('config:cache');
   echo Artisan::call('cache:clear');
   echo Artisan::call('route:clear');
   // echo Artisan::call('optimize');

   dd('Borrado');
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

///Movimientos
Route::get('/movimientos','MovimientosController@index')->name('movimientos');
Route::get('/movimientos/create','MovimientosController@create')->name('movimientos.create');
Route::post('/movimientos/store','MovimientosController@store')->name('movimientos.store');
Route::get('/movimientos/edit/{mov_id}','MovimientosController@edit')->name('movimientos.edit');
Route::post('/movimientos/update/{mov_id}','MovimientosController@update')->name('movimientos.update');
Route::post('/movimientos/destroy/{mov_id}','MovimientosController@destroy')->name('movimientos.destroy');

Route::post('/movimientos/search','MovimientosController@index')->name('movimientos.search');

Route::post('/facturas_detalle','FacturasController@detalle')->name('facturas.detalle');

Route::resource('facturas','FacturasController');

Route::get('/factura_pdf/{fac_id}','FacturasController@facturas_pdf')->name('facturas.pdf');;

