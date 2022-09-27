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
        return view('login2');
    });

    Route::get('/dashboard/inventario', function () {
        if(!isLogged())    return redirect('/');
        return view('/dashboard/inventario_dashboard');
    });
    Route::get('/inventario', function () {
        if(!isLogged())    return redirect('/');
        return view('inventario');
    });


    Route::get('/inventario_entradas', function () {
        if(!isLogged())    return redirect('/');
        return view('inventario_entradas');
    });
    

    Route::get('/inventario_salidas', function () {
        if(!isLogged())    return redirect('/');
        return view('/inventario_salidas');
    });


    Route::get('/dashboard/usuario', function () {
        if(!isLogged())    return redirect('/');
        return view('dashboard/usuarios_dashboard');
    });
    Route::get('/usuario_listado', function () {
        if(!isLogged())    return redirect('/');
        return view('usuarios');
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

    Route::get('/toma_inventario', function () {
        if(!isLogged())    return redirect('/');
        return view('toma_inventario');
    });

    Route::get('/movimientos_almacen', function () {
        if(!isLogged())    return redirect('/');
        return view('movimientos_almacen');
    });



    Route::get('/pegamentos', function () {
        if(!isLogged())    return redirect('/');
        return view('pegamentos');
    });


    Route::get('/prueba_validacion', function () {
        if(!isLogged())    return redirect('/');
        return view('prueba_validacion');
    });

  

    Route::get('/registro_usuario2', function () {
        if(!isLogged())    return redirect('/');
        return view('registro_usuario2');
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

Route::get('/listar_entradas', function () {
    return view('listar_entradas');
});

Route::get('/login2', function () {
    return view('login2');
});




