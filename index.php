<?php
// Modifiqué los links del menú de Administrador
require_once "models/enlaces.php";
require_once "models/ingreso.php";
require_once "models/crud.php";

require_once "controllers/template.php";
require_once "controllers/enlaces.php";
require_once "controllers/ingreso.php";
require_once "controllers/controller.php";

$template = new TemplateController();
$template -> template();

