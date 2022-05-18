<?php

?>

<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Lista de estudios</li>
        </ol>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 overflow-auto">
								<table id="tablaEstudios" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 0.8em">#</th>
	                                        <th>Cliente</th>
	                                        <th>Médico</th>
	                                        <th>Fecha</th>
	                                        <th>Responsable</th>
	                                        <th>Estudios</th>
	                                        <th>Costo</th>
	                                        <th style="width: 2.5em;">Editar</th>
												<?php 
													if ($_SESSION["rol"] == 0) {
														echo '<th style="width: 2.5em;">Borrar</th>';
													}
												?>
											</tr>
									</thead>
									<tbody>
										<?php
											$registro = new Controller();
                                            $registro -> listaEstudios();
                                            $registro -> borrarEstudio();
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
	    $('#tablaEstudios').DataTable({
            
        });
	});

</script>