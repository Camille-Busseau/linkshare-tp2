<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";

            // static function requireModel($page){
            // return require_once 'model/Model'.$page.'.php';
    }
    static public function redirectPage($page){
        return header("Location: http://localhost:80/webAvance/linkshare/".$page);

        // static function redirect($url){
        //     header("location: $url");
        //     }
           
    }
}

?>