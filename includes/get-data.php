<?php
require_once "controller/token-controller.php";

class CanvasData{
    public function get_data_canvas(){
        $token = new Token();
        $return = "ERROR";
        $token_enviado = $_GET["token"];

        $token_bd = $token->gettoken();
        if($token_bd != "ERROR"){
            if(strcmp($token_enviado,$token_bd)==0){
                $get_file = file_get_contents("includes/assets/data-canvas.json");
                $decode_file = json_decode($get_file,true);
                $return = $decode_file;
            }
        }        
        echo $get_file;
    }
}
?>