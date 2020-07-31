<?php

session_start();

if(!$_SESSION["validar"]){

  header("location:index.php");

  exit();

}
require_once "../../controllers/controller.php";
require_once "../../models/crud.php";
?>


<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de cliente</li>
        </ol>


        	<div class="row">
        <div class="col-md-12 mr-xl-2 ml-xl-2">

          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>apellidos</th>
                  <th>Email</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>
                </thead>
                 <tbody>
                    <?php
                        $registro = new Controller();
                        $registro -> listaClientes();
                        //$registro -> borrarCliente();

                    ?>
                </tbody>

              </table>
            </div>


          </div>
        </div>
      </div>
    </div>
</div>

<script>
  $(function () {
    $('#example1').DataTable()
    
  })
</script>