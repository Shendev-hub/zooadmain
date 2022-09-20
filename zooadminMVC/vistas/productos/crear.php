<?php
    include_once("./modelos/producto.php");
?>

<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
                <div class="card-header text-white bg-primary text-center">
                    añadir una mascota
                </div>

                <div class="card-body">
                    <div class="container col-sm-6">
                        <form method="POST" action="index.php?controlador=productos&accion=controladorCrearProducto">
                            <div class = "form-group">
                                <label for="inputcodigo"> <strong> codigo del animal </strong></label>
                                <input type="text" name="txtcodigo" class="form-control" id="inputcodigo" placeholder="Digite el codigo del animal">
                            </div>

                            <div class = "form-group">
                                <label for="inputnombre"> <strong> Nombre del animal </strong></label>
                                <input type="text" name="txtnombre" class="form-control" id="inputnombre" placeholder="Digite el Nombre del animal">
                            </div>

                            <div class = "form-group">
                                <label for="inputpresentacion"> <strong> Sexo </strong></label>
                                <input type="text" name="txtpresentacion" class="form-control" id="inputpresentacion" placeholder="Digite el sexo">
                            </div>

                            <div class = "form-group">
                                <label for="inputprecio"> <strong> Edad </strong></label>
                                <input type="text" name="txtprecio" class="form-control" id="inputprecio" placeholder="Digite la edad">
                            </div>

                            <div class = "form-group">
                                <label for="inputtipo"> <strong> Estado del animal </strong></label>
                                <input type="text" name="txttipo" class="form-control" id="inputtipo" placeholder="Digite el estado">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary"> Añadir animal  </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
