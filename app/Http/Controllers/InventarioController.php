<?php

namespace App\Http\Controllers;

use App\Http\Ajax\InventarioAjax;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function byAlmacen(){
        return InventarioAjax::byAlmacen();
    }


}
