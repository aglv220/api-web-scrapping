<?php
require_once "controllers/token-controller.php";
class CanvasData extends Token
{
    public function get_data_canvas()
    {
        $return = "ERROR - TOKEN INVÁLIDO";
        $token_enviado = isset($_GET["token"]) ? $_GET["token"] : false;
        if ($token_enviado != false) {
            $token_bd = $this->gettoken();
            $token_bd_value = $token_bd->token;
            if ($token_bd != "ERROR") {
                if (strcmp($token_enviado, $token_bd_value) == 0) {
                    $get_file = file_get_contents("includes/assets/data-canvas.json");
                    $return = $get_file;
                }
            }
        } else {
            $return = "ERROR - TOKEN NO RECIBIDO";
        }
        echo $return;
    }
}
