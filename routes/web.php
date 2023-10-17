<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');
});

Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes.index');
Route::get('/clientes/create', 'App\Http\Controllers\ClientesController@create')->name('clientes.create');
Route::post('/clientes', 'App\Http\Controllers\ClientesController@store')->name('clientes.store');
Route::delete('eliminarcliente/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');
Route::get('/clientes/{cliente}/edit', 'App\Http\Controllers\ClientesController@edit')->name('clientes.edit');
Route::get('/clientes/{cliente}/edit', 'App\Http\Controllers\ClientesController@edit')->name('clientes.edit');
Route::put('/clientes/{cliente}', 'App\Http\Controllers\ClientesController@update')->name('clientes.update');

