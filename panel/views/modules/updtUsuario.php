<?php 
	$idUsuario = $_REQUEST['idUsuario'];
 	$respuesta = Datos::mdlBuscaUsuario("usuarios", $idUsuario);
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Actualización de usuario</li>
        </ol>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" name="forma">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaNombres">Nombre:</label>
                                                <input class="form-control" type="text" required placeholder="Nombre(s)" id="cajaNombres" name="cajaNombres" value="<?php echo $respuesta['nombres'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaApellidos">Apellidos:</label>
                                                <input class="form-control" type="text" required placeholder="Apellidos" id="cajaApellidos" name="cajaApellidos" value="<?php echo $respuesta['apellidos'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaEmail">Correo electrónico:</label>
                                                <input class="form-control" type="email" required
                                                placeholder="Correo electrónico" id="cajaEmail" name="cajaEmail" value="<?php echo $respuesta['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaPassword">Contraseña:</label>
                                                <input class="form-control" type="password"
                                                placeholder="Contraseña" id="cajaPassword" name="cajaPassword">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-profile" src="../img/profile_picture_placeholder.png" alt="Seleccionar foto de perfil">
                                    <input name="inputFile" type="file" hidden>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="selectRol">Rol:</label>
                                        <select required class="form-control" id="selectRol" name="selectRol">
                                            <option value="">Rol</option>
                                            <option value="0" <?php if ($respuesta["rol"] == 0) echo 'selected';  ?> >Administrador</option>
                                            <option value="1" <?php if ($respuesta["rol"] == 1) echo 'selected'; ?> >Usuario</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="selectActivo">Activo:</label>
                                        <select required class="form-control" id="selectActivo" name="selectActivo">
                                            <option value="">Activo</option>
                                            <option value="s" <?php if ($respuesta["activo"] == "s") echo 'selected'; ?> >Sí</option>
                                            <option value="n" <?php if ($respuesta["activo"] == "n") echo 'selected';  ?>>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
    <!-- 
                                <div class="col-md-4">
                                </div> -->

                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit" class="btn btn-primary" style="min-width: 10em;" value="aceptar">Aceptar</button>
                                </div>
                            </div>
                        </div>     

                        <?php 

                        $controller = new Controller();
                        
                        $controller -> ctlActualizarUsuario($idUsuario);

                        ?>

                    </form>

                </div>

            </div>
        </div>

    </div>
</div>