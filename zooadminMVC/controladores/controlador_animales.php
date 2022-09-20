<?php
    include_once("conexion.php");
    include_once("modelos/animal.php");


    class ControladorProductos {

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


        public function controladorCrearProducto() {
            if ($_POST){
                $pro=$_POST["txtcodigo"];
                $nom=$_POST["txtnombre"];
                $pres=$_POST["txtpresentacion"];
                $prec=$_POST["txtprecio"];
                $tipo=$_POST["txttipo"];
                Producto::CrearProducto($pro,$nom,$pres,$prec,$tipo);
                header("Location: index.php?controlador=productos&accion=mostrar");
            }
           
            
        }

        public function borrarRegistro() {
            if ($_GET['id']){
                $idProducto=$_GET['id'];
                Producto::BorrarProducto($idProducto);
                echo '<script>';
                echo "window.location.href='index.php?controlador=productos&accion=mostrar' ";
                echo '</script>';
            }
        }

    }  

?>