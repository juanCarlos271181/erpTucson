<?php

namespace App\Http\Controllers;

use App\Http\Ajax\InventarioAjax;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function byAlmacen(){
        try{
            $content = InventarioAjax::byAlmacen();
            return (new Response($content, 200))
                ->header('Content-Type', "application/json");
        }catch(Exception $e){
            $content = "Consulte al dpto de informatica";
            return (new Response($content, 503))
                ->header('Content-Type', "application/json");
        }

    }


}
