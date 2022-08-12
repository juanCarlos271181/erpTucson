<?php

namespace App\Http\Ajax; 

use Illuminate\Support\Facades\DB;

class UsuariosAjax{

    public static function mres($value){
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");
        return str_replace($search, $replace, $value);
    }
/*
    foreach($almacenid $item){
        $r = json_decode(json_encode($item), true);
        $query.=" I".$r["idalmacen"].".cantidad AS "
    }
*/
    public static function datatable(){

        $aColumns = array(
            'nombre',
            'apellido',
            'email',
            'telefono',
            'rol',
            'accion'
        );

        $sLimit="";
        if (isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1') {
            $sLimit = "LIMIT " . self::mres( $_GET['iDisplayStart']) . ", " . self::mres( $_GET['iDisplayLength']);
        }
        
        $sOrder = "";
        if (isset($_GET['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";
            for ($i = 0; $i < intval($_GET['iSortingCols']); $i++) {
                if ($_GET['bSortable_' . intval($_GET['iSortCol_' . $i])] == "true") {
                    if ($_GET['iSortCol_0'] != 8) {
                        $sOrder .= "`" . $aColumns[intval($_GET['iSortCol_' . $i])] . "` " . self::mres( $_GET['sSortDir_' . $i]) . ", ";
                    } else {
                        $sOrder .= "`" . $aColumns[intval($_GET['iSortCol_' . $i])] . "` " . self::mres( $_GET['sSortDir_' . $i]) . ", ";
                    }
                }
            }
        
            $sOrder = substr_replace($sOrder, "", -2);
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
        }

        $output = array(
            "iTotalRecords" => "" . 0,
            "iTotalDisplayRecords" => "" . 0,
            "aaData" => array(),
            "filters" => array("marca"=>array(),"rol"=>array()),
            "params" => array(
                "idrol" => isset($_GET["idll"]) ? $_GET["idrol"] : NULL
            )
        );

        $query="
            SELECT 
                idusuario,
                username,
                tx_nombre,
                tx_apellido,
                dni,
                tx_email_usuario,
                idrol,
                idfoto_usuario
              FROM usuario        
            WHERE 1=1 ";
        $sSearch = isset($_GET["sSearch"]) ? trim($_GET["sSearch"]) : NULL;
        if($sSearch){
            $query .= " AND ( username like '%$sSearch%'";
            $query .= "     OR tx_nombre like '%$sSearch%'";
            $query .= "     OR tx_apellido like '%$sSearch%'";
            $query .= "     OR dni like '%$sSearch%'";
            $query .= "     OR tx_email_usuario like '%$sSearch%')";
        }

        if(isset($output["params"]) && isset($output["params"]["idrol"]) && $output["params"]["idrol"]>-1){
            $query .= " AND idrol = ".$output["params"]["idrol"];
        }
        if(isset($output["params"]) && isset($output["params"]["idusuario"]) && $output["params"]["idusuario"]>-1){
            $query .= " AND idusuario = ".$output["params"]["idusuario"];
        }

        $usuarios = DB::select($query .= " " . $sOrder." " );

        $iTotalRecords = count($usuarios);

        $output["iTotalRecords"] = $iTotalRecords;
        $output["iTotalDisplayRecords"] = $iTotalRecords;
        $output["query"] = $query;

        $data=array();

        $TX_ROL = array(
            1=>"ROOT",
            2=>"ADMINISTRACION",
            3=>"RRHH",
            4=>"INVENTARIO"                        
        );

        foreach($usuarios as $item){
            $r = json_decode(json_encode($item), true);
            $row = array_values($r);
            $data[]=$row;
            if(isset($output["params"]) && isset($output["params"]["idrol"]) && $output["params"]["idrol"]>-1){
                if(!array_key_exists($r["idrol"],$output["filters"]["rol"])){
                    $output["filters"]["rol"][$r["idrol"]]=array("key"=>$r["idrol"],"value"=>$TX_ROL[$r["idrol"]]);
                }
            }
        }

        ksort($output["filters"]["rol"]);
        $output["filters"]["rol"] = array_values($output["filters"]["rol"]);

        $usuarios = DB::select($query .= " ".$sLimit );
        $data =array();
        foreach($usuarios as $item){
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
    

 