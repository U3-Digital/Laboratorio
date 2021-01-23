<?php
require('../../../controllers/controller.php');
require('../../../models/crud.php');


$idMedico = $_GET["idMedico"];

$Controller = new Controller();

$cosa = $Controller -> ctlBuscaMedico($idMedico);

print_r(json_encode($cosa));
