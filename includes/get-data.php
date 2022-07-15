<?php
require_once "controller/token-controller.php";

class CanvasData
{
    public function get_data_canvas()
    {
        $token = new Token();
        $return = "ERROR";
        $token_enviado = $_GET["token"];

        $token_bd = $token->gettoken();
        $token_bd_value = $token_bd->token;
        if ($token_bd != "ERROR") {            
            if (strcmp($token_enviado, $token_bd_value) == 0) {
                $get_file = file_get_contents("includes/assets/data-canvas.json");
                $return = $get_file;
            }
        }
        echo $return;
    }
}
