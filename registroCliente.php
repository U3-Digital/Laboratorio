<?php session_start();
if(!$_SESSION["validar"]){
  header("location:index.php");
  exit();

}
require_once "controllers/controller.php";
require_once "models/crud.php";

  //echo "<script>console.log('".$_SESSION["id"]."')</script>";
  //echo "<script>conosle.log('hola')</<scr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Control Panel | GA</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="plugins/sweetalert2/sweetalert2.js"></script>
<body>
	<div class="hold-transition sidebar-mini">
		<div class="wrapper">

<!-- Main Sidebar Container -->
      <?php
        include "includes/menus/navegacion.php";
        if ($_SESSION['rol']==0) include "includes/menus/menuAdmin.php";
        else include "includes/menus/menuUsuario.php";
      ?>

		  <!-- Content Wrapper. Contains page content -->
		  <div class="content-wrapper">
		    <!-- Content Header (Page header) -->
		    <div class="content-header">
		      <div class="container-fluid">

              <form role="form" method="post">

		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0 text-dark">Registro</h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Starter Page</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <!-- /.content-header -->

                <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h5 class="m-0">Información personal</h5>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="addonNombre">Nombre(s)</span>
                                          </div>
                                          <input  required type="text" name="nombres" class="form-control" placeholder="" aria-label="nombre" aria-describedby="addonNombre">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="addonPaterno">Apellido paterno</span>
                                          </div>
                                          <input type="text" name="aPaterno" class="form-control" placeholder="" aria-label="paterno" aria-describedby="addonPaterno">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="addonMaterno">Apellido materno</span>
                                          </div>
                                          <input type="text" name="aMaterno" class="form-control" placeholder="" aria-label="materno" aria-describedby="addonMaterno">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="addonEdad">Edad</span>
                                          </div>
                                          <input type="text" name="edad" class="form-control" placeholder="" aria-label="edad" aria-describedby="addonEdad">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="addonTelefono">Teléfono</span>
                                          </div>
                                          <input type="text" name="telefono" class="form-control" placeholder="" aria-label="telefono" aria-describedby="addonTelefono">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h5 class="m-0">Datos generales</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonEscolaridad">Escolaridad</span>
                                            </div>
                                            <input type="text" name="escolaridad" class="form-control" placeholder="" aria-label="escolaridad" aria-describedby="addonEscolaridad">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                                <select class="custom-select" id="documento" name="documento">
                                                <option selected>Documento</option>
                                                <option value="curriculum">Curriculum</option>
                                                <option value="solicitud">Soicitud</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonFecha">Fecha</span>
                                            </div>
                                            <input type="date" name="fecha" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonFecha">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h5 class="m-0">Información laboral</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonClasificacion">Estatus</span>
                                            </div>
                                            <select class="custom-select" id="selectEstatus" name="status">
                                                <option>Seleccione</option>
                                                <option value="V">Verde</option>
                                                <option value="B">Blanco</option>
                                                <option value="R">Rojo</option>
                                                <?php
                                                    if ($_SESSION['rol']==0) {
                                                       echo '<option value="N">Negro</option>';
                                                    }
                                                 ?>

                                            </select>
                                        </div>

                                    </div>


                                   <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonClasificacion">Clasificación</span>
                                            </div>
                                            <input type="text" name="clasificacion" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonClasificacion">
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h5 class="m-0">Información laboral</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-mb-12">
                                         <label>Trabajo 1: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonEmpleos">Empresa</span>
                                            </div>
                                            <input type="text" name="empresa1" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonEmpleos">
                                        </div>
                                    </div>


                                </div>
                                        <!-- Edad Escolaridad Clasificacion Por lo pronto no Status-->
                                <div class="row">
                                   <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonClasificacion">Puesto</span>
                                            </div>
                                            <input type="text" name="puesto1" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonClasificacion">
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonClasificacion">Tiempo</span>
                                            </div>
                                            <input type="text" name="tiempo1" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonClasificacion">
                                        </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-mb-12">
                                         <label>Trabajo 2: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonEmpleos">Empresa</span>
                                            </div>
                                            <input type="text" name="empresa2" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonEmpleos">
                                        </div>
                                    </div>


                                </div>
                                        <!-- Edad Escolaridad Clasificacion Por lo pronto no Status-->
                                <div class="row">
                                   <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonClasificacion">Puesto</span>
                                            </div>
                                            <input type="text" name="puesto2" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonClasificacion">
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="addonClasificacion">Tiempo</span>
                                            </div>
                                            <input type="text" name="tiempo2" class="form-control" placeholder="" aria-label="solicitud" aria-describedby="addonClasificacion">
                                        </div>
                                   </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h5 class="m-0">Extra</h5>
                            </div>

                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                            <label>Observaciones</label>
                                            <textarea class="form-control" name="observaciones"></textarea>
                                </div>

                                <div class="col-sm-12">
                                            <label>Adicional</label>
                                            <textarea class="form-control" name="adicional"></textarea>
                                </div>

                            </div>

                            </div>

                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                         <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">Aceptar</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>

                    <?php
                    $registro = new Controller();
                    $registro -> registroSocio($_SESSION["nombre"]);
                    ?>
                </form>
            </div>
        </div>
		    <!-- /.content -->
		  </div>
		  <!-- /.content-wrapper -->

		  <?php
		  	include "includes/menus/footer.php";
		  ?>
		</div>
	</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>