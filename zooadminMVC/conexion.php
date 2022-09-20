<?php
class baseDatos{
        private static $instancia=NULL;

        public static function crearInstancia(){
            if(!isset(self::$instancia)){
                $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
                self::$instancia=new PDO ('mysql:host=localhost;dbname=zooadmin','root','',$opcionesPDO);
                // echo "La conexion se realizó exitosamente";
            }
            return self::$instancia;
        }
}
?>