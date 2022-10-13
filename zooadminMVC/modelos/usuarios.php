<?php
    class Usuario{

        public static function crear ($perfil, $nombre, $correo, $clave ){
            $conexionBaseDatos=baseDatos::crearInstancia();
            $sql=$conexionBaseDatos->prepare ("INSERT INTO usuarios(perfil, nombre, correo, clave)
                                                values(?,?,?,?)");
            $sql -> execute(array($perfil, $nombre, $correo, $clave));
        }
    }

?>