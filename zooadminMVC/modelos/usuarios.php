<?php
    class Usuario{

        public static function crear ($perfil, $nombre, $correo, $clave, $id_animal ){
            $conexionBaseDatos=baseDatos::crearInstancia();
            $sql=$conexionBaseDatos->prepare ("INSERT INTO usuarios(perfil, nombre, correo, clave, id_animal)
                                                values(?,?,?,?)");
            $sql -> execute(array($perfil, $nombre, $correo, $clave, $id_animal));
        }
    }

?>