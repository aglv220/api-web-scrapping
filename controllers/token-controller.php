<?php
require_once "functions/system-function.php";
class Token extends SystemFuncion
{
        protected function gettoken()
        {
                $user = $this->decript_data("=oAYKAGYw0DVhc1NDViR7YVJWxjK");
                $password = $this->decript_data("=oAYKAGYgVDS1YFOM1lV94UJjwiK");
                $url_token = 'http://empiresoftgroup.online/academico/ApiControlador/obtener_token?usuario=' . $user . '&password=' . $password;
                //LOCALHOST API
                //$url_token = 'http://localhost/academico/ApiControlador/obtener_token?usuario=' . $user . '&password=' . $password;
                $get_file = file_get_contents($url_token);
                $decode_file = json_decode($get_file);
                if ($decode_file == "ERROR") {
                        return false;
                } else {
                        return $decode_file;
                }
        }
}
