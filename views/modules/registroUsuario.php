<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de usuario</li>
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
                                                <input class="form-control" type="text" required placeholder="Nombre(s)" id="cajaNombres" name="cajaNombres">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaApellidos">Apellidos:</label>
                                                <input class="form-control" type="text" required placeholder="Apellidos" id="cajaApellidos" name="cajaApellidos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaEmail">Correo electrónico:</label>
                                                <input class="form-control" type="email" required
                                                placeholder="Correo electrónico" id="cajaEmail" name="cajaEmail">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaPassword">Contraseña:</label>
                                                <input class="form-control" type="password" required
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
                                            <option value="" selected>Rol</option>
                                            <option value="0">Administrador</option>
                                            <option value="1">Usuario</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="selectActivo">Activo:</label>
                                        <select required class="form-control" id="selectActivo" name="selectActivo">
                                            <option value="" selected>Activo</option>
                                            <option value="s">Sí</option>
                                            <option value="n">No</option>
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
                        
                        // print_r($_POST);

                        $controller -> ctlRegistrarUsuario();

                        ?>

                    </form>

                </div>

            </div>
        </div>

    </div>
</div>