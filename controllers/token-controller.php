<?php
require_once "functions/system-function.php";
class Token extends SystemFuncion
{
        protected function gettoken()
        {
                $user = "=oAYKAGYw0DVhc1NDViR7YVJWxjK";
                $password = "=oAYKAGYgVDS1YFOM1lV94UJjwiK";
                $encripted_login = 1;
                $secure_token = 1;
                $url_token = 'http://empiresoftgroup.online/academico/ApiControlador/obtener_token?usuario=' . $user . '&password=' . $password . "&encriptedlogin=" . $encripted_login . "&securetoken=" . $secure_token;
                //$url_token = 'http://localhost/academico/ApiControlador/obtener_token?usuario=' . $user . '&password=' . $password . "&encriptedlogin=" . $encripted_login . "&securetoken=" . $secure_token;
                $get_file = file_get_contents($url_token);
                $decode_file = json_decode($get_file);
                $decode_file_val = $decode_file->token;
                $decript_file = $this->decript_data($decode_file_val);
                if ($decript_file == "ERROR") {
                        return false;
                } else {
                        return $decript_file;
                }
        }
}
