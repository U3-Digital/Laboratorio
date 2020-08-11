<?php
require('../../../controllers/controller.php');
require('../../../models/crud.php');

$hoy = $_GET["fecha_"];

$Controller = new Controller();

$cosa = $Controller -> ctlResumenDiario($hoy);

print_r(json_encode($cosa));