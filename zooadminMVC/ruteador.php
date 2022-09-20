<?php
    include_once "controladores/controlador_$getcontrolador.php";
    $controlador="Controlador".ucfirst($getcontrolador);
    $objcontrolador = new $controlador();
    $objcontrolador -> $getaccion();

?>