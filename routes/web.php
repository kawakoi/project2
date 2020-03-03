<?php

use App\Pastel;
use App\Http\Controllers\PastelController;

//En este archivo se almacenarán todos los comandos y órdenes para llamar a la ruta del archivo (controlador) que deberá ejecutarse

//HOME

//En primer lugar, la página principal mostrará únicamente "Home"
Route::get('/', function (){
    return view('inicio');
})->name('inicio');

//PASTELES-----------------------------------------------

//Indice
Route::get('/pasteles', 'PastelController@index')->name('todos_pasteles');

//Mostrar
Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+')->name('detalle_pastel');

//Crear Pastel con Formulario
Route::get('/pasteles/crear', 'PastelController@crear')->name("pastel_nuevo");

//Enviar Formulario CREAR
Route::post('/pasteles/store', 'PastelController@store');
