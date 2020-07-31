<?php 
require "../../controllers/controller.php";
require "../../controllers/enlaces.php";
require "../../models/enlaces.php";
require "../../models/crud.php";

?>

<!DOCTYPE html>
<html>
<head dir="ltr" lang="en-US">
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="CMStudio" />
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


	<!-- data tables-->
	 <script src="../../lib/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../lib/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- Document Title
	============================================= -->
	<title>Panel  | GA Recursos Humanos</title>
</head>
<body class="fixed-nav">

<?php 
	
	$modulos = new Enlaces();
	$modulos -> enlacesController();
include "menu.php";

?>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="../../lib/vendor/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../lib/vendor/adminlte/dist/js/adminlte.js"></script>
	<script type="text/javascript" src="../js/sb-admin.min.js"></script>
	

</body>
</html>