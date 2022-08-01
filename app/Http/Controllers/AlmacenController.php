<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Almacen;


class AlmacenController extends Controller
{
    public function index()
    {
        //return Almacen::orderBy("idalmacen")->get();
        return json_encode(DB::select("SELECT * FROM almacen"));
        //return DB::select("SELECT * FROM almacen");
    }

}

