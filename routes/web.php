<?php

use Illuminate\Support\Facades\Route;

/*
Rutas
*/

//Ver main
Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('inicio', 'App\Http\Controllers\inicioController');
Route::get('inicio', 'App\Http\Controllers\inicioController@index')->name('menu.inicio'); 

Route::resource('tienda', 'App\Http\Controllers\tiendaController');
Route::get('tienda', 'App\Http\Controllers\tiendaController@index')->name('menu.tienda'); 

Route::resource('ubicacion', 'App\Http\Controllers\ubicacionController');
Route::get('ubicacion', 'App\Http\Controllers\ubicacionController@index')->name('menu.ubicacion'); 
