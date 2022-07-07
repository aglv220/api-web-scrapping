<?php
class CanvasData{
    public function get_data_canvas(){
        $get_file = file_get_contents("assets/data-canvas.json");
        $decode_file = json_decode($get_file,true);
        return $decode_file;
    }
}
?>