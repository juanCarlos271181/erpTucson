<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use DateTime;

class LoginController extends Controller
{

    public static function logout(){
        if(session_id() != ""){
            session_unset();
            session_destroy();
            session_start();
        }
    }

    public static function isLogged($show=0){
        //$show=1;    
        $sessionKey = session_id();

        if($sessionKey == ""){
            session_start();
        }
    
        $username="";
        $route = "";  
        $sessionStart = 0;
        $date = new DateTime();
        $now = $date->getTimestamp();
        $sessionLastPing=0;
        
        if(isset($_SESSION["user"])){
            $route = substr($_SERVER["REQUEST_URI"],strripos($_SERVER["REQUEST_URI"],"/"));  
            $username = $_SESSION["user"]["username"]; 
            $sessionKey = session_id();
            $sessionLastPing = isset($_SESSION["session_last_ping"])?$_SESSION["session_last_ping"]:$now;
        }

        $data=["sessionKey"=>$sessionKey, "username"=>$username, "sessionTime"=>$now-$sessionLastPing, "route"=>$route];
        if($show){
            echo "<pre>";
            var_dump($data);
            echo "</pre>";
        }
        $_SESSION["session_last_ping"]=$now;    


        $isLogged = (($now-$sessionLastPing)<100) && ($username!="");
        
        if(!$isLogged){
            self::logout();
        }

        return ($isLogged);
    }



    public function login(Request $request){
        
        $query = "SELECT * FROM usuario WHERE username = :username AND password = :password";
        
        $bindings = array(":username"=> $request->username, ":password"=> $request->password);

        $usuario = DB::select($query, $bindings);
        /* array(1) { [0]=> object(stdClass)#301 (11) 
            {   ["idusuario"]=> int(1) 
                ["username"]=> string(24) "roger.munoz.ar@gmail.com" 
                ["password"]=> string(6) "123456" 
                ["tx_nombre"]=> string(5) "ROGER" 
                ["tx_apellido"]=> string(5) "MUNOZ" 
                ["dni"]=> string(8) "96014017" 
                ["tx_email_usuario"]=> string(24) "roger.munoz.ar@gmail.com" 
                ["idrol"]=> NULL 
                ["idfoto_usuario"]=> NULL 
                ["updated_at"]=> string(19) "2022-08-03 03:13:01" 
                ["created_at"]=> string(19) "2022-08-03 03:13:01" 
            } 
        }*/ 

        if(count($usuario)>0){
            $u = json_decode(json_encode($usuario[0]), true);
            if(session_id() != ""){
                session_unset();
                session_destroy();
                }
            session_start();
            $session = session_id();
            $date = new DateTime();
            $_SESSION["user"] = array(
                "idusuario"=>$u["idusuario"],
                "username"=>$u["username"],
                "nombre"=>$u["tx_nombre"],
                "session_start_datetime"=>$date->getTimestamp()
            );
            return ["status"=>200, "text"=>"user logged", "data"=>$_SESSION["user"]];    
        }  
    }
}