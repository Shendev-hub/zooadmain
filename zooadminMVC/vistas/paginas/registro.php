
<?php
include_once("./modelos/usuarios.php");
?>

<div class="container wrap-form">
    <div class="card card-color">
        <div class="card-header">
            Registro nuevos usuarios
        </div>
        <div class="card-body">
            <div class="container col-sm-6">
                <form method="POST" action="index.php?controlador=usuarios&accion=crear" novalidate>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="inputPerfil" class="form-label ">Perfil</label>
                            <input type="text" value="usuario" name="txtperfil" class="form-control has-validation" id="inputPerfil" placeholder="Digite el perfil de Usuario" required>
                            <div class="invalid-feedback">
                                Campo requerido.
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label" for="inputNombre">Nombre Completo</label>
                            <input type="text" name="txtnombre" class="form-control" id="inputNombre" placeholder="Digite nombre y apellido completo" required>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="inputEmail">Correo Electronico</label>
                            <input type="email" name="txtEmail" class="form-control" id="inputEmail" placeholder="Digite su Correo" required>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" name="txtPassword" class="form-control" id="inputPassword" placeholder="Digite su Contraseña" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark btn-style">Registrese</button>

                </form>
                <div class="container">
                    <div class="row">
                        <p class=" col-8">Si ya te registraste ingresa aquí | </p>
                        <a class="col-4" href="index.php?controlador=paginas&accion=login"> Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>