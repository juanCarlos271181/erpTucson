<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{

    public function store(Request $request){
        $usuario = new Usuario;
        //$usuario->status = self::STATUS_ACTIVE;
        $usuario->username = $request->email;
        $usuario->tx_nombre = $request->nombre;
        $usuario->tx_apellido = $request->apellido;
        $usuario->dni = $request->dni;
        $usuario->tx_email_usuario = $request->email;
        $usuario->password = $request->password;
        try{
            $usuario->save();
            return (new Response("datos guardados", 200))
            ->header('Content-Type', "application/json");

        }catch(QueryException $e){
            return (new Response("datos erroneos", 400))
                ->header('Content-Type', "application/json");
        }


    }
 
}
