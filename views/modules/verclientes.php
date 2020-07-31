<?php

session_start();

if(!$_SESSION["validar"]){

  header("location:index.php");

  exit();

}
require_once "controllers/controller.php";
require_once "models/crud.php";
include "views/modules/menu.php";
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Ver clientes</li>
        </ol>


        <div class="row">
            <div class="col-md-12">

                <div class="card">
                </div>
            </div>
        </div>
	</div>
</div>