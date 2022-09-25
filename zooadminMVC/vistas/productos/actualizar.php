<?php
    include_once("./modelos/animal.php");
?>

<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
                <div class="card-header text-white bg-primary text-center">
                    Actualizacion de mascotas
                </div>

                <div class="card-body">
                    <div class="container col-sm-6">
                        <form method="POST" action="">
                            <div class = "form-group">
                                <label for="inputid_animal"> <strong> Id de mascota </strong></label>
                                <input type="text" value="<?php echo $Datosanimal->idanimal; ?>" name="txtid_animal" class="form-control" id="inputid_animal" disabled>
                            </div>

                            <div class = "form-group">
                                <label for="inputnombre"> <strong> Nombre del animal </strong></label>
                                <input type="text" value="<?php echo $Datosanimal->nombreanimal; ?>" name="txtnombre" class="form-control" id="inputnombre" >
                            </div>

                            <div class = "form-group">
                                <label for="inputpresentacion"> <strong> Sexo del animal </strong></label>
                                <input type="text" value="<?php echo $Datosanimal->sexoanimal; ?>"  name="txtsexo" class="form-control" id="inputsexo" >
                            </div>

                            <div class = "form-group">
                                <label for="inputedad"> <strong> edad del animal </strong></label>
                                <input type="text" value="<?php echo $Datosanimal->edadanimal; ?>" name="txtedad" class="form-control" id="inputedad" >
                            </div>

                            <div class = "form-group">
                                <label for="inputid_especie"> <strong> Tipo del producto </strong></label>
                                <input type="text" value="<?php echo $Datosanimal->tipoProducto; ?>" name="txttipo" class="form-control" id="inputtipo" >
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary"> Actualizar producto  </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
