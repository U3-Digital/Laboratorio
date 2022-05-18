<?php 
	$usuario = $_REQUEST['idEditar'];
 	$respuesta = Datos::mdlBuscaCliente("clientes",$usuario);

?>





<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de cliente</li>
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
                                                <input class="form-control" type="text" required placeholder="Nombre(s)" id="cajaNombres" value="<?php echo $respuesta['nombre']; ?>" name="cajaNombres">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaApellidos">Apellidos:</label>
                                                <input class="form-control" type="text"  placeholder="Apellidos" id="cajaApellidos" value="<?php echo $respuesta['apellidos']; ?>" name="cajaApellidos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="cajaEmail">Correo electrónico:</label>
                                                <input class="form-control" type="email" required
                                                placeholder="Correo electrónico" value="<?php echo $respuesta['email']; ?>" id="cajaEmail" name="cajaEmail">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img src="../img/profile_picture_placeholder.png" class="img-profile"  alt="Seleccionar foto de perfil">
                                </div>
                            </div>
                            
                            <div class="row">
    <!-- 
                                <div class="col-md-4">
                                </div> -->

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="min-width: 10em;">Aceptar</button>
                                </div>
                            </div>
                        </div>     

                        <?php 

                         $controller = new Controller();
                        
                         $controller -> actualizaCliente($usuario);

                        ?>

                    </form>

                </div>

            </div>
        </div>

    </div>
</div>