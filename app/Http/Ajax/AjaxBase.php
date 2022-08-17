<?php

namespace App\Http\Ajax; 
use Illuminate\Support\Facades\DB;

class AjaxBase{

    public static function clean($value){
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");
        return str_replace($search, $replace, $value);
    }

    public static function limit(){
        $sLimit="";
        if (isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1') {
            $sLimit = "LIMIT " . self::clean( $_GET['iDisplayStart']) . ", " . self::clean( $_GET['iDisplayLength']);
        }
        return $sLimit;
    }

    public static function sort($aColumns){
        $sOrder = "";
        if (isset($_GET['iSortCol_0'])) {
            $sOrder = "ORDER BY  ";
            for ($i = 0; $i < intval($_GET['iSortingCols']); $i++) {
                if ($_GET['bSortable_' . intval($_GET['iSortCol_' . $i])] == "true") {
                    if ($_GET['iSortCol_0'] != 8) {
                        $sOrder .= "`" . $aColumns[intval($_GET['iSortCol_' . $i])] . "` " . self::clean( $_GET['sSortDir_' . $i]) . ", ";
                    } else {
                        $sOrder .= "`" . $aColumns[intval($_GET['iSortCol_' . $i])] . "` " . self::clean( $_GET['sSortDir_' . $i]) . ", ";
                    }
                }
            }
        
            $sOrder = substr_replace($sOrder, "", -2);
            if ($sOrder == "ORDER BY") {
                $sOrder = "";
            }
            return $sOrder;
        }
    }
}