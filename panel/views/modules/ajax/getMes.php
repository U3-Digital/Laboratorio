<?php
require('../../../controllers/controller.php');
require('../../../models/crud.php');
$Controller = new Controller();

$cosa = $Controller -> ctlResumenMensual($_POST);

print_r(json_encode($cosa));