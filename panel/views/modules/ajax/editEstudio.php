<?php

require('../../../controllers/controller.php');
require('../../../models/crud.php');
$Controller = new Controller();

$respuesta = $Controller ->ctlActualizarEstudio($_POST["idEstudio"], $_POST);  


print_r($respuesta);            
