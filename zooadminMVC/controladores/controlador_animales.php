<?php
    include_once("conexion.php");
    include_once("modelos/animal.php");


    class Controladoranimales {

        public function mostrar(){
            $datosProductos=Producto::consultaranimales();
            include_once "vistas/productos/mostrar.php";
        }

        public function crear(){
            include_once "vistas/productos/crear.php";
        }

        public function actualizarRegistro(){
            $idanimal=$_GET['id_animal'];
            $DatosProducto=animal::BuscarProducto($idanimal);
            //print_r($Datosanimal); para verificar que sirve
            
            include_once "vistas/productos/actualizar.php";
            if($_POST){
                
                $nom=$_POST["txtnombre"];
                $sex=$_POST["txtsexo"];
                $edad=$_POST["txtedad"];
                $especie=$_POST["txtespecie"];
                $hm=$_POST["txthistorial"];
                animal::Actualizaranimal($idanimal,$nom,$sex,$edad,$especie,$hm);
                echo '<script>';
                echo "window.location.href='index.php?controlador=animal&accion=mostrar' ";
                echo '</script>';
            }
            include_once "./vistas/productos/actualizar.php";
        }


        public function controladorCrearanimal() {
            if ($_POST){
                $pro=$_POST["txtnombre"];
                $nom=$_POST["txtsexo"];
                $pres=$_POST["txtedad"];
                $prec=$_POST["txtespecie"];
                $tipo=$_POST["txthistorial"];
                Producto::CrearProducto($nom,$sex,$edad,$especie,$hm);
                header("Location: index.php?controlador=animales&accion=mostrar");
            }
           
            
        }

        public function borrarRegistro() {
            if ($_GET['id_animal']){
                $idanimal=$_GET['id_animal'];
                Producto::BorrarProducto($idanimal);
                echo '<script>';
                echo "window.location.href='index.php?controlador=animales&accion=mostrar' ";
                echo '</script>';
            }
        }

    }  

?>