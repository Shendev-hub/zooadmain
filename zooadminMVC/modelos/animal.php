<?php
    class animal{
        public $idanimal;
        public $nombreanimal;
        public $esexoanimal;
        public $edadanimal;
        public $especieanimal;
        public $historialmedico;

    public function __construct ($idA,$nombreA,$sexoA,$edadA,$especieA,$historialM){
        $this->idanimal=$idA;
        $this->nombreanimal=$nombreA;
        $this->sexoanimal=$sexoA;
        $this->edadanimal=$edadA;
        $this->especieanimal=$especieA;
        $this->historialmedico=$historialM;
    }

    // leer o consultar los productos

    public static function consultaranimales(){
        $listaanimales=[];
        $dbConexion=baseDatos::crearInstancia();
        $sql=$dbConexion->query ("SELECT * FROM animales");
        foreach($sql->fetchall() as $animal){
            $listaanimales []=new animal ($animal['id_animal'],$animal['nombre'],$animal['sexo'],$animal['edad'],$animal['especie_animal'],$animal['historial_med']);
        }
        return $listaanimales;
    }

    public static function Crearanimal($nombreA,$sexoA,$edadA,$especieA,$historialM){
        $conexionBaseDatos=BaseDatos::crearInstancia();
        $sql=$conexionBaseDatos -> prepare ("INSERT INTO animales(nombre, sexo, edad, id_especie, historial_med)
                                            values(?,?,?,?,?)");
        $sql -> execute(array($nombreA,$sexoA,$edadA,$especieA,$historialM));

    }

    public static function Borraranimal($idanimal){
        $conexionBaseDatos=BaseDatos::crearInstancia();
        $sql=$conexionBaseDatos -> prepare ("DELETE FROM animales WHERE id=?");
        $sql->execute (array($idanimal));

    }


    public static function ActualizarProducto($id,$nom,$sex,$edad,$especie,$hm){
        $conexionBaseDatos=BaseDatos::crearInstancia();
        $sql=$conexionBaseDatos -> prepare ("UPDATE animales SET nombre=?, sexo=?, edad=?, id_especie=?, historial_med=?  WHERE id=?");
        $sql->execute (array($id,$nom,$sex,$edad,$especie,$hm));

    }


    public static function BuscarProducto($idanimal){
        $conexionBaseDatos=BaseDatos::crearInstancia();
        $sql=$conexionBaseDatos -> prepare ("SELECT * FROM animales WHERE id=?");
        $sql->execute (array($idanimal));
        $producto=$sql->fetch();
        return new animal ($animal['id_animal'],$animal['nombre'],$animal['sexo'],$animal['edad'],$animal['id_especie'], $animal['historial_med']);

    }

    }

?>