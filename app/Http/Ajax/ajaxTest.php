<?php

use Illuminate\Support\Facades\DB;

json_encode(DB::select("SELECT * FROM almacen"));