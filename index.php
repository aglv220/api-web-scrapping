<?php
require_once "controller/plantilla-controller.php";
$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();
//REDIRECCIÓN A CONTROLADOR CANVAS
//header("Location: controller/canvas-controller.php");
?>