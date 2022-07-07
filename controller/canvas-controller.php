<?php
    require_once "includes/get-data.php";
    /*** API CANVAS UTP ***/
    $canvas_data = new CanvasData();
    $data_ws = $canvas_data->get_data_canvas();
?>