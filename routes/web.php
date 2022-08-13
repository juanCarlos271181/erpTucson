<?php

use App\Http\Controllers\LoginController;
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

    function isLogged($show=0){
        return LoginController::isLogged($show);
    }

    Route::get('/', function () {
        if(isLogged()) return view('index');
        return view('index');
    });

    Route::get('/login', function () {
        if(isLogged())    return redirect('/');
        return view('login');
    });

    Route::get('/inventario', function () {
        if(!isLogged())    return redirect('/');
        return view('inventario');
    });


    Route::get('/usuario/dashboard', function () {
        if(!isLogged())    return redirect('/');
        return view('dashboard_usuarios');
    });
    Route::get('/usuario_listado', function () {
        if(!isLogged())    return redirect('/');
        return view('usuarios');
    });
    Route::get('/usuario_registro', function () {
        if(!isLogged())    return redirect('/');
        return view('registro_usuario');
    });


    Route::get('/marmoleria', function () {
        if(!isLogged())    return redirect('/');
        return view('marmoleria');
    });
 
    Route::get('/menu_principal', function () {
        if(!isLogged()) return redirect('/'); 
        return view('menu_principal');
    });

    Route::get('/menu', function () {
        if(!isLogged())    return redirect('/');
        return view('menu');
    });

    Route::get('/pegamentos', function () {
        if(!isLogged())    return redirect('/');
        return view('pegamentos');
    });


    Route::get('/prueba_validacion', function () {
        if(!isLogged())    return redirect('/');
        return view('prueba_validacion');
    });

    Route::get('/registro_usuario', function () {
        if(!isLogged())    return redirect('/');
        return view('registro_usuario');
    });

    Route::get('/griferia', function () {
        if(!isLogged())    return redirect('/');
        return view('griferia');
    });

Route::get('/ceramicos', function () {
    return view('ceramicos');

});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/registro_ventas', function () {
    return view('registro_ventas');
});




