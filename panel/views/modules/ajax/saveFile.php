<?php
require('../../../controllers/controller.php');
require('../../../models/crud.php');


$Controller = new Controller();
$respuesta = $Controller ->ctlsaveEstudio($_POST);  


print_r($respuesta);            

