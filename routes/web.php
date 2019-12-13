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

//Route::get('/item', 'ItemController@index')->name('item.index');
//Route::get('/item/create', 'ItemController@create')->name('item.create');
//Route::get('/item/store', 'ItemController@store')->name('item.store');

Route::resource('item', 'ItemController');
Route::resource('comanda', 'ComandaController');
Route::get('pedido/addpedido/{id}', 'PedidoController@addPedido')->name('addpedido');
Route::resource('pedido', 'PedidoController');
Route::get('pedido/statusPronto/{id}', 'PedidoController@statusPronto')->name('statusPronto');
Route::get('pedido/statusCancelado/{id}', 'PedidoController@statusCancelado')->name('statusCancelado');
