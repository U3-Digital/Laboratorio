<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="E-studio" />

	<!-- Bootstrap core CSS-->
	  <link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="views/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <link href="views/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	  <link href="views/css/sb-admin.css" rel="stylesheet">

	<title>Panel de Control</title>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
		

 	<?php

		$modulos = new Enlaces();
		$modulos -> enlacesController();
		//include "views/modules/footer.php"
	?>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirme por favor</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Salir" abajo para cerrar la sesion actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="views/modules/salir.php">Salir</a>
          </div>
        </div>
      </div>
    </div>


    <script src="views/vendor/jquery/jquery.min.js"></script>
    <script src="views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="views/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="views/vendor/chart.js/Chart.min.js"></script>
    <script src="views/vendor/datatables/jquery.dataTables.js"></script>
    <script src="views/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="views/js/sb-admin.min.js"></script>
    <script src="views/js/sb-admin-datatables.min.js"></script>
    <script src="views/js/sb-admin-charts.min.js"></script>
    <script src="views/js/validarIngreso.js"></script>

	</div>
</body>
</html>