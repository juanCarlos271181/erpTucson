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
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/inventario', function () {
    return view('inventario');
});

Route::get('/marmoleria', function () {
    return view('marmoleria');
});

Route::get('/menu_principal', function () {
    return view('menu_principal');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/pegamentos', function () {
    return view('pegamentos');
});

Route::get('/perfil_usuario', function () {
    return view('perfil_usuario');
});

Route::get('/prueba_validacion', function () {
    return view('prueba_validacion');
});

Route::get('/registro_usuario', function () {
    return view('registro_usuario');
});

Route::get('/griferia', function () {
    return view('griferia');
});

Route::get('/ceramicos', function () {
    return view('ceramicos');
});

Route::get('/prueba', function () {
    return view('prueba');
});