<?php
require('../../../controllers/controller.php');
require('../../../models/crud.php');


$idCliente = $_GET["idCliente"];

$Controller = new Controller();

$cosa = $Controller -> ctlBuscaCliente($idCliente);

print_r(json_encode($cosa));
