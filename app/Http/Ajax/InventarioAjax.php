<?php

namespace App\Http\Ajax; 

use Illuminate\Support\Facades\DB;

class InventarioAjax extends AjaxBase{

    public static function datatable(){

        $aColumns = array(
            'codigo',
            'descripcion',
            'idmarca',
            'tx_marca',
            'idsuperrubro',
            'tx_superrubro',
            'idrubro',
            'tx_rubro',
            'lote',
            'total',
            'cantidad',
            'nombre',
            'qrcode'
        );

        $output = array(
            "iTotalRecords" => "" . 0,
            "iTotalDisplayRecords" => "" . 0,
            "aaData" => array(),
            "filters" => array("marca"=>array(),"rubro"=>array(),"superrubro"=>array(),"almacen"=>array()),
            "params" => array(
                "idmarca" => isset($_GET["idmarca"]) ? $_GET["idmarca"] : NULL,
                "idrubro" => isset($_GET["idrubro"]) ? $_GET["idrubro"] : NULL,
                "idsuperrubro" => isset($_GET["idsuperrubro"]) ? $_GET["idsuperrubro"] : NULL,
                "idalmacen" => isset($_GET["idalmacen"]) ? $_GET["idalmacen"] : NULL,
                "codigo" => isset($_GET["codigo"]) ? $_GET["codigo"] : NULL,
                "lote"  => isset($_GET["lote"]) ? $_GET["lote"] : NULL        
            )
        );

        $query="
            SELECT 
                P.codigo,
                P.descripcion,
                M.idmarca,
                M.tx_marca,
                R.idsuperrubro,
                R.tx_superrubro,
                R.idrubro,
                R.tx_rubro,
                I.lote,
                vtotal.total,
                I.cantidad,
                A.nombre almacen ,
                P.codigo qr
            FROM productos as P
            JOIN v_marca as M ON( M.idmarca = P.idmarca )
            JOIN v_rubro AS R ON (R.idrubro = P.idrubro)
            JOIN inventario AS I ON (I.idproducto = P.idproducto)
            JOIN almacen AS A ON (A.idalmacen = I.idalmacen )
            JOIN (SELECT idproducto,lote,sum(cantidad) as total 
                    FROM inventario GROUP BY idproducto,lote) as vtotal
                    ON (vtotal.idproducto=P.idproducto AND vtotal.lote = I.lote) 
            WHERE 1=1 ";

        $sSearch = isset($_GET["sSearch"]) ? trim($_GET["sSearch"]) : NULL;

        if($sSearch){
            $query .= " AND ( descripcion like '%$sSearch%'";
            $query .= "     OR codigo like '%$sSearch%'";
            $query .= "     OR tx_marca like '%$sSearch%'";
            $query .= "     OR tx_rubro like '%$sSearch%'";
            $query .= "     OR tx_superrubro like '%$sSearch%' )";
        }

        if($output["params"]["idalmacen"]>-1){
            $query .= " AND A.idalmacen = ".$output["params"]["idalmacen"];
        }
        if($output["params"]["idmarca"]>-1){
            $query .= " AND M.idmarca = ".$output["params"]["idmarca"];
        }
        if($output["params"]["idrubro"]>-1){
            $query .= " AND R.idrubro = ".$output["params"]["idrubro"];
        }
        if($output["params"]["idsuperrubro"]>-1){
            $query .= " AND R.idsuperrubro = ".$output["params"]["idsuperrubro"];
        }

        $inventario = DB::select($query .= " " . self::sort($aColumns)." " );

        $almances = DB::select("SELECT * FROM almacen ORDER BY idalmacen");

        foreach($almances as $item){
            $r = json_decode(json_encode($item), true);
            $output["filters"]["almacen"][$r["idalmacen"]]=array("key"=>$r["idalmacen"],"value"=>$r["nombre"]);
        }

        $iTotalRecords = count($inventario);

        $output["iTotalRecords"] = $iTotalRecords;
        $output["iTotalDisplayRecords"] = $iTotalRecords;
        $output["query"] = $query;

        $data=array();

        foreach($inventario as $item){
            $r = json_decode(json_encode($item), true);
            $row = array_values($r);
            $data[]=$row;
            if(!array_key_exists($r["idmarca"],$output["filters"]["marca"])){
                $output["filters"]["marca"][$r["idmarca"]]=array("key"=>$r["idmarca"],"value"=>$r["tx_marca"]);
            }
            if(!array_key_exists($r["idrubro"],$output["filters"]["rubro"])){
                $output["filters"]["rubro"][$r["idrubro"]]=array("key"=>$r["idrubro"],"value"=>$r["tx_rubro"]);
            }
            if(!array_key_exists($r["idsuperrubro"],$output["filters"]["superrubro"])){
                $output["filters"]["superrubro"][$r["idsuperrubro"]]=array("key"=>$r["idsuperrubro"],"value"=>$r["tx_superrubro"]);
            }
        }

        ksort($output["filters"]["superrubro"]);
        $output["filters"]["superrubro"] = array_values($output["filters"]["superrubro"]);

        ksort($output["filters"]["rubro"]);
        $output["filters"]["rubro"] = array_values($output["filters"]["rubro"]);

        ksort($output["filters"]["marca"]);
        $output["filters"]["marca"] = array_values($output["filters"]["marca"]);

        ksort($output["filters"]["almacen"]);
        $output["filters"]["almacen"] = array_values($output["filters"]["almacen"]);


        $inventario = DB::select($query .= " ".self::limit() );
        $data =array();
        foreach($inventario as $item){
            $data[] = array_values(json_decode(json_encode($item), true));
        }

        $output["aaData"] = $data;

        return  json_encode($output);

    }    
     
}
      
    
    /*
    $sessionkey = isset($_GET["sessionkey"]) ? $_GET["sessionkey"] : NULL;
    $user = UserDBOps::getUserBySessionKey($sessionkey);
    
    if (!$user || !$user->getUserPrivileges()->isUserSupportCentre()) {
        die("Unauthorised access");
    }
    */
    

 