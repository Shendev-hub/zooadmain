<?php
include_once "conexion.php";
include_once "./modelos/usuarios.php";

    class ControladorUsuarios {

        public function crear(){
            if($_POST){
                $perfil=$_POST["txtperfil"];
                $nombre=$_POST["txtnombre"];
                $correo=$_POST["txtEmail"];
                $clave=$_POST["txtPassword"];
                Usuario::crear($perfil, $nombre, $correo, $clave);
                header("Location: index.php?controlador=paginas&accion=login"); 
            }
        }

        public function ingreso(){
            if(isset($_POST["login"])){
                include_once("./conexion.php");
                $email=$_POST["txtEmail"];
                $password=$_POST["txtPassword"];
                $pdo=baseDatos::crearInstancia();
                $consulta=$pdo->prepare("SELECT * FROM usuarios WHERE correo=:correo AND clave=:clave");
                $consulta->bindParam("correo",$email,PDO::PARAM_STR);
                $consulta->bindParam("clave",$password,PDO::PARAM_STR);
                $consulta->execute();
                $registroEncontrado= $consulta -> fetch(PDO::FETCH_ASSOC);
                $numeroRegistros = $consulta->rowCount();
                if ($numeroRegistros>=1){
                    $_SESSION["usuario"]=$registroEncontrado;
                    header("Location: index.php");
                }else{
                    echo "USUARIO O CONTRASEÑA INVALIDOS";
                }
            }

        }



        public function mostrar(){
            include_once "vistas/usuarios/mostrar.php";
        }

        public function editar(){
            include_once "vistas/usuarios/editar.php";
        }

    }

?>