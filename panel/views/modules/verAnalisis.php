<?php ?>

<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Lista de análisis</li>
		</ol>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 overflow-auto">
								<table id="tablaAnalisis" class="table table-bordered table-striped">
					                <thead>
					                <tr>
					                  <th style="width: 10px">#</th>
					                  <th>Nombre</th>
					                  <th>Costo</th>
					                  <?php 
                                        if ($_SESSION["rol"] == 0) {
											echo'<th style="width: 2.5em">Editar</th>';
                                            echo '<th style="width: 2.5em;">Borrar</th>';
                                        }
										?>
					                </tr>
					                </thead>
					                 <tbody>
					                    <?php
					                        $controller = new Controller();
					                        $controller -> ctlListaAnalisis();
					                        $controller -> ctlBorrarAnalisis();
					                    ?>
					                </tbody>

					              </table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
	

	$(document).ready( function () {
	    $('#tablaAnalisis').DataTable({
            
        });
	});

</script>