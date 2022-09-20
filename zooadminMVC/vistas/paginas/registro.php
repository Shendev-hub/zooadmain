<?php
    include_once("./modelos/usuarios.php" );
?>

<div class ="container">
    <div class="card card-color">
        <div class="card-header">
            Registro nuevos usuarios
        </div>
        <div class = "card-body">
            <div class="container col-sm-6">
                <form method="POST" action="index.php?controlador=usuarios&accion=crear">
                    <div class ="form-group">
                        <label for="inputPerfil">Perfil</label>
                        <input type="text" value ="usuario" name="txtperfil" class="form-control" id="inputPerfil" placeholder="Digite el perfil de Usuario" required>
                    </div>
                    <div class ="form-group">
                        <label for="inputNombre">Nombre Completo</label>
                        <input type="text" name="txtnombre" class="form-control" id="inputNombre" placeholder="Digite nombre y apellido completo" required>
                    </div>
                    <div class ="form-group">
                        <label for="inputEmail">Correo Electronico</label>
                        <input type="email" name="txtEmail" class="form-control" id="inputEmail" placeholder="Digite su Correo" required>
                    </div>
                    <div class ="form-group">
                        <label for="inputPassword">Contraseña</label>
                        <input type="password" name="txtPassword" class="form-control" id="inputPassword" placeholder="Digite su Contraseña" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Registrese</button>
                    <br>
                    <div class ="form-group">
                        <p class = "text-center py-3">Si ya te registraste ingresa aqui | <a href="index.php?controlador=paginas&accion=login"> Ingresar</a></p>
                </form>
            </div>
        </div>
    </div>
</div>