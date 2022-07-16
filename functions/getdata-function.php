<?php
require_once "controllers/token-controller.php";
class CanvasData extends Token
{
    public function get_data_canvas()
    {
        $encripted = true;
        $return = "ERROR - TOKEN INVÁLIDO";
        $token_enviado = false;
        if (isset($_GET["token"])) {
            $get_sendtoken = $_GET["token"];
            if ($encripted) {
                $get_sendtoken = $this->decript_data($get_sendtoken);
            }
            $token_enviado = $get_sendtoken == "ERROR" ? false : $get_sendtoken;
        }
        if ($token_enviado != false) {
            $token_bd = $this->gettoken();
            //$token_bd_value = $token_bd->token;
            if ($token_bd != false) {
                if (strcmp($token_enviado, $token_bd) == 0) {
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
