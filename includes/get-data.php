<?php
class CanvasData{
    public function get_data_canvas(){
        $get_file = file_get_contents("includes/assets/data-canvas.json");
        $decode_file = json_decode($get_file,true);
        print_r($decode_file);
    }
}
?>