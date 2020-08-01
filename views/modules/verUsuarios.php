<?php 
// phpinfo();
?>

<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Lista de usuarios de usuario</li>
        </ol>

        <div class="row">
        	<div class="col-md-12">
        		<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th style="width: 0.8em">#</th>
                  	<th>Nombres</th>
                  	<th>Apellidos</th>
                  	<th>Email</th>
                  	<th>Rol</th>
                 	<th>Activo</th>
                  	<th style="width: 2.5em;">Editar</th>
	                <th style="width: 2.5em;">Borrar</th>
                </tr>
                </thead>
                 <tbody>
                    <?php
                        
                        $controller = new Controller();
                        $controller -> ctlListaUsuarios();
                        $controller -> ctlBorrarUsuario();
                        // $registro = new Controller();
                        // $registro -> listaClientes();
                        //$registro -> borrarCliente();

                    ?>
                </tbody>

              </table>
        	</div>
        </div>


	</div>
</div>

<script type="text/javascript">
	

	$(document).ready( function () {
	    $('#cosa').DataTable();
	});

</script>