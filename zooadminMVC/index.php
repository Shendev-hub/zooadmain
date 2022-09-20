<?php 
    $getcontrolador="paginas";
    $getaccion="inicio";
    if ( (isset($_GET['controlador']))  &&  (isset($_GET['accion']))  )   {
        if ( (!empty($_GET['controlador'])) && (!empty($_GET['accion']))  ){
            $getcontrolador=$_GET['controlador'];
            $getaccion=$_GET['accion'];
        }
    }
    include_once ("vistas/plantilla.php");
    
?>