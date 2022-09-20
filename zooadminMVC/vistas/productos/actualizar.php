<?php
    include_once("./modelos/producto.php");
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
                                <label for="inputid"> <strong> Id de producto </strong></label>
                                <input type="text" value="<?php echo $DatosProducto->idProducto; ?>" name="txtid" class="form-control" id="inputid" disabled>
                            </div>
                            
                        
                            <div class = "form-group">
                                <label for="inputcodigo"> <strong> Código de producto </strong></label>
                                <input type="text" value="<?php echo $DatosProducto->codProducto; ?>" name="txtcodigo" class="form-control" id="inputcodigo" >
                            </div>

                            <div class = "form-group">
                                <label for="inputnombre"> <strong> Nombre del producto </strong></label>
                                <input type="text" value="<?php echo $DatosProducto->nombreProducto; ?>" name="txtnombre" class="form-control" id="inputnombre" >
                            </div>

                            <div class = "form-group">
                                <label for="inputpresentacion"> <strong> Presentación </strong></label>
                                <input type="text" value="<?php echo $DatosProducto->presentacionProducto; ?>"  name="txtpresentacion" class="form-control" id="inputpresentacion" >
                            </div>

                            <div class = "form-group">
                                <label for="inputprecio"> <strong> Precio del producto </strong></label>
                                <input type="text" value="<?php echo $DatosProducto->precioProducto; ?>" name="txtprecio" class="form-control" id="inputprecio" >
                            </div>

                            <div class = "form-group">
                                <label for="inputtipo"> <strong> Tipo del producto </strong></label>
                                <input type="text" value="<?php echo $DatosProducto->tipoProducto; ?>" name="txttipo" class="form-control" id="inputtipo" >
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
