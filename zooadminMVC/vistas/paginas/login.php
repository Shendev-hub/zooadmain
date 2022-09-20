<?php
    include_once("./controladores/controlador_usuarios.php" );
    $objIngreso=new ControladorUsuarios();
    $objIngreso -> ingreso();
?>

<div class ="container">
    <div class="card card-color">
        <div class="card-header">
            Ingreso al Sistema
        </div>
        <div class = "card-body">
            <div class="container col-sm-6">
                <form method="POST" action="">
                    <div class ="form-group">
                        <label for="inputEmail">Correo Electronico</label>
                        <input type="email" name="txtEmail" class="form-control" id="inputEmail" placeholder="Digite su Correo" required>
                    </div>
                    <div class ="form-group">
                        <label for="inputPassword">Contraseña</label>
                        <input type="password" name="txtPassword" class="form-control" id="inputPassword" placeholder="Digite su Contraseña" required>
                    </div>
                    <br>
                    <button type="submit" name="login" class="btn btn-primary">Ingresar</button>
                    <br>
                    <div class ="form-group">
                        <p class = "text-center py-3">Para registrarse hágalo aqui | <a href="index.php?controlador=paginas&accion=registro"> Registrese</a></p>
                </form>
            </div>
        </div>
    </div>
</div>