<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlBienvenida;
use App\Http\Controllers\ctrlDatos;
use App\Http\Controllers\ctrlApiholis;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/holisss',function()
{
    return ('holisss ITI-23');
});

Route::get('/miRuta',[ctrlBienvenida::class,'Bienvenidos']);
//proceso de suma estatico
Route::get('/ctrbinv',[ctrlBienvenida::class,'Suma']);
//datos en la url
Route::get('/ctrlDatos/{n1}',[ctrlBienvenida::class,'Datosuma']);

//ruta nueva con dos datos
Route::get('/ctrlDatos/{n1}/{n2}',[ctrlBienvenida::class,'Datosuma2']);

Route::get('/ctrlDatos/{n1}/{n2}',[ctrlBienvenida::class,'Datosuma3']);

Route::get('/datos',[ctrlDatos::class,'AccesoDatosVista']);

//vista con datos link
Route::get('/datoslink',[ctrlDatos::class,'AccesoDatosVistaLink']);

//vista datos de la api holisss
Route::get('/datosapiholis',[ctrlApiholis::class,'AccesoDatosVistaApi']);

