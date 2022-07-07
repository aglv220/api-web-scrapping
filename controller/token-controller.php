<?php
class Token{
	public function gettoken(){
        $user = "utp_canvas";
        $password = "Theclown10";
        $url_token = 'http://empiresoftgroup.online/academico/ApiControlador/obtener_token?usuario='.$user.'&password='.$password;
        $get_file = file_get_contents($url_token);
        $decode_file = json_decode($get_file);
        return $decode_file->token;
	}
}
?>