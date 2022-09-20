 
 <!-- funcion javascript para confirmar si se elimina o no el registro -->

<script type="text/javascript"> 
    function confirmar(id,nombre) {
        if (confirm('Esta seguro de eliminar el registro? \n\nId = ' + id)==true) {
            alert('El registro '+id+ ' ha sido eliminado correctamente!!! \n\nHaga clic en Aceptar para actualizar la tabla');
            return true;
        }else{
            return false;
        }
    }
</script>

<!-- fin de la funcion eliminar registro -->

<div class="container">
    <div class="btn-group p-3" role="group" aria-label="">
        <a href="index.php?controlador=productos&accion=crear" class= "btn btn-primary">Añadir una mascota</a>
    </div>

    <h2 class="text-center">ANIMALES</h2>
    <div class="container">
        <table id="productos" class="table table-bordered border-primary table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Código</th>
                    <th>Nombre Producto</th>
                    <th>Presentación</th>
                    <th>Precio</th>
                    <th>Tipo Producto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datosProductos as $p) { ?>
                <tr>
                    <td>   <?php echo $p->idProducto  ?>   </td>
                    <td>   <?php echo $p->codProducto  ?>   </td>
                    <td>   <?php echo $p->nombreProducto  ?>   </td>
                    <td>   <?php echo $p->presentacionProducto  ?>   </td>
                    <td>   <?php echo $p->precioProducto  ?>   </td>
                    <td>   <?php echo $p->tipoProducto  ?>   </td>
                    <td class="d-flex flex-row justify-content-center">
                        <div class="btn-group" role="group">
                            <a href="index.php?controlador=productos&accion=actualizarRegistro&id=<?php echo $p->idProducto  ?>" class="btn btn-warning">Editar</a>&nbsp &nbsp
                            <a href="index.php?controlador=productos&accion=borrarRegistro&id=<?php echo $p->idProducto  ?>" class="btn btn-danger" onclick="return confirmar(<?php echo $p->idProducto  ?>)">Eliminar</a>

                        </div>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
        
    </div>
</div>