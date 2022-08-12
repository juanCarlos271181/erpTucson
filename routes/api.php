<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(LoginController::class)->group(function(){
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::controller(UsuarioController::class)->group(function(){
    Route::post('/usuario/registro', 'store');
    Route::get('/usuario/login', 'login');
    Route::get('/usuario/datatable', 'datatable');
});

Route::controller(InventarioController::class)->group(function(){
    Route::get('/inventario/byAlmacen', 'byAlmacen');
});

Route::controller(ProductoController::class)->group(function(){
    Route::get('/producto', 'index');
    Route::get('/producto/codigo/{id}', 'show');
    Route::post('/producto', 'store');
});
