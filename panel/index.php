<?php
	include_once "./controllers/ingreso.php";
    include_once "./models/crud.php";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="U3Digital" />
	<!-- <link rel="shortcut icon" href="favicon.ico" /> -->

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="lib/vendor/bootstrap/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="views/css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="lib\vendor\adminlte\dist\css\adminlte.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Panel  | Laboratorio</title>

</head>

<body class="stretched">

<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background-image: url('Assets/fondo.jpg'); background-size: cover;"></div>

	<div class="row h-100 borde" style="margin: auto;">
		<div class="card mx-auto my-auto" style="width: 25em;">
			<div class="card-body">
				<h3>Ingreso al Sistema</h3>
				<form method="POST">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="cajaUsuario">Correo electrónico:</label>
								<input placeholder="Correo electrónico"  class="form-control" type="email" id="cajaUsuario" name="usuarioIngreso">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="cajaPassword">Contraseña:</label>
								<input placeholder="Contraseña"  class="form-control" type="password" id="cajaPassword" name="passwordIngreso">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-primary">Aceptar</button>
						</div>
					</div>

					<?php
				        $ingreso = new Ingreso();
				        $ingreso -> ingresoController();
			        ?>


				</form>
			</div>
		</div>
	</div>

	<!-- External JavaScripts
	============================================= -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="lib/vendor/bootstrap/js/bootstrap.js"></script>


</body>
</html>