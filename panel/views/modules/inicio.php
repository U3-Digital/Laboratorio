<?php 
session_start();
if(!$_SESSION["validar"]){

	// print_r($_SESSION);
	header("location:../../index.php");
	exit();
}

require "../../controllers/controller.php";
require "../../controllers/enlaces.php";
require "../../models/enlaces.php";
require "../../models/crud.php";


$controller = new Controller();

?>

<!DOCTYPE html>
<html>
<head dir="ltr" lang="en-US">
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="CMStudio" />
  <meta charset="UTF-8"/>
	<!-- <link rel="shortcut icon" href="favicon.ico" /> -->

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../lib/vendor/bootstrap/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../../lib\vendor\adminlte\dist\css\adminlte.min.css">
	<link rel="stylesheet" type="text/css" href="../css/sb-admin.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<link rel="stylesheet" href="../../lib/vendor/sweetalert2/sweetalert2.min.css">
	<script src="../../lib/vendor/sweetalert2/sweetalert2.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="../../lib/vendor/datatables/jquery.dataTables.js"></script>
	<script src="../../lib/vendor/datatables/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

	<title>Panel  | Laboratorio</title>
</head>
<body class="fixed-nav">

<?php 
	include "estudios.php";

	$modulos = new Enlaces();
	$modulos -> enlacesController();
// include "menu.php";

	if ($_SESSION["rol"] == 0) {
		include "menu.php";
	} else {
		include "menu-noadmin.php";
	}

	// print_r("<script>console.log('" . $_SESSION["rol"] . "');</script>");
?>

	<script src="impresion/impresion.js"></script>
	<script src="impresion/generarCuerpoCorreo.js"></script>
	<script src="../../lib/vendor/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../lib/vendor/adminlte/dist/js/adminlte.js"></script>
	<script type="text/javascript" src="../js/sb-admin.min.js"></script>
	


</body>
</html>