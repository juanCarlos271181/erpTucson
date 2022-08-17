<?php

namespace App\Http\Ajax; 

use Illuminate\Support\Facades\DB;

class UsuariosAjax extends AjaxBase{

    public static $TX_ROL = array(
        1=>"ROOT",
        2=>"ADMINISTRACION",
        3=>"RRHH",
        4=>"INVENTARIO"                        
    );

    public static function byId($idusuario){

        $query="
            SELECT 
                username,
                tx_nombre,
                tx_apellido,
                dni,
                '' tx_telefono,
                tx_email_usuario,
                idrol,
                idusuario
              FROM usuario        
            WHERE idusuario = ".$idusuario;

        $usuarios = DB::select($query);
        $usuarios = json_decode(json_encode($usuarios), true);

        if(count($usuarios)>0){
            if($usuarios[0]["idrol"]){
                $usuarios[0]["txrol"]=self::$TX_ROL[$usuarios[0]["idrol"]]; 
            }
        }

        $output = array();
        $output["data"]  = $usuarios;
        $output["roles"] = array();

        foreach(self::$TX_ROL as $key=>$value){
            $output["roles"][$key] = array("key"=>$key,"value"=> $value);
        }

        $output["roles"] = array_values($output["roles"]);

        return  json_encode($output);

    }    

    public static function datatable(){

        $aColumns = array(
            'tx_nombre',
            'tx_apellido',
            'tx_email_usuario',
            'tx_telefono',
            'idrol',
            'rol' ,
            'idusuario'
        );

        $output = array(
            "iTotalRecords" => "" . 0,
            "iTotalDisplayRecords" => "" . 0,
            "aaData" => array(),
            "filters" => array("rol"=>array()),
            "params" => array(
                "idrol" => isset($_GET["idrol"]) ? $_GET["idrol"] : NULL
            )
        );

        $query="
            SELECT 
                username,
                tx_nombre,
                tx_apellido,
                dni,
                '' tx_telefono,
                tx_email_usuario,
                idrol,
                idrol rol,
                idusuario
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

        $usuarios = DB::select($query .= " " . self::sort($aColumns)." " );

        $iTotalRecords = count($usuarios);

        $output["iTotalRecords"] = $iTotalRecords;
        $output["iTotalDisplayRecords"] = $iTotalRecords;
        $output["query"] = $query;


        foreach($usuarios as $item){
            $r = json_decode(json_encode($item), true);
            $row = array_values($r);
            
            //if(isset($output["params"]) && isset($output["params"]["idrol"]) && $output["params"]["idrol"]>-1){
                if(!array_key_exists($r["idrol"],$output["filters"]["rol"])){
                    $output["filters"]["rol"][$r["idrol"]]=array("key"=>$r["idrol"],"value"=>self::$TX_ROL[$r["idrol"]]);
                }
            //}
        }

        ksort($output["filters"]["rol"]);
        $output["filters"]["rol"] = array_values($output["filters"]["rol"]);

        $usuarios = DB::select($query .= " ".self::limit() );
        $data =array();
        foreach($usuarios as $item){
            $r = json_decode(json_encode($item), true);
            $row = array_values($r);
            $row["7"] = self::$TX_ROL[$r["idrol"]]  ;
            $data[]=$row;
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
    

 