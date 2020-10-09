<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Antigeno prostatico");
?>
<div class="modal fade" id="antigenoprostatico" tabindex="-1" role="dialog" aria-labelledby="antigenoprostatico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Antígeno prostático</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAntigenoProstatico">PSA Total:</label>
		        			<input class="form-control" type="text" id="cajaResultadoAntigenoProstatico" name="cajaResultadoAntigenoProstatico" required value="0.0 ng/ml">
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<p>Límites de referencia:</p>
		        		<table>
		        			<tr>
								<th>
									Según la edad:
								</th>
		        			</tr>
		        			<tr>
		        				<td>
		        					40 - 49 años
		        				</td>
		        				<td style="padding-left: 3em;">
		        					Hasta 2.1
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					50 - 59 años
		        				</td>
		        				<td style="padding-left: 3em;">
		        					Hasta 3.0
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					60 - 69 años
		        				</td>
		        				<td style="padding-left: 3em;">
		        					Hasta 4.9
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					70 - 79 años
		        				</td>
		        				<td style="padding-left: 3em;">
		        					Hasta 7.3
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					> 80 años
		        				</td>
		        				<td style="padding-left: 3em;">
		        					Hasta 8.6
		        				</td>
		        			</tr>
		        		</table>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-8">
		        		<p>Nota:</p>
		        		<p style="font-size: .8em">Niveles elevados de este anticuerpo se obersvan en pacientes con manipulaciones prostáticas recientes (tacto, masaje, etc.), procodimientos diagnósticos o quirúrgicos, hiperplasias prostáticas, infecciones o inflamaciones aguidas, neoplasias prostáticas. La mejor sensibilidad y especificidad diagnóstica de la prueba como marcador, se obtiene de la combinación de la fosfatasa ácida total, la gracción prostática y el P. S. A libre. En pacientes con prostatectomía, los niveles de P. S. A deben de declinar a partir de la tercera semana posterior al evento quirúrgico. En el primer año post-cirugía, se deben medir los niveles del P. S. A. cada 4 meses y posteriormente cada 6 meses.</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarAntigenoProstatico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	// const cajaResultadoAmilasa = document.getElementById('cajaResultadoAmilasa');
	
	function validarAntigenoProstatico() {
		// if (cajaResultadoAntigenoProstatico.value) {

			let estudio = {
				idmodal: 'antigenoprostatico',
				nombre: 'Antígeno prostático',
				resultados: 
				[{
					nombre: 'Antígeno prostático',
					resultado: cajaResultadoAntigenoProstatico.value,
					limites: ['Hasta 2.1', 'Hasta 3.0', 'Hasta 4.9', 'Hasta 7.3', 'Hasta 8.6']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalAntigenoProstatico();
			limpiarAntigenoProstatico();
			
		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalAntigenoProstatico() {
		$(`#antigenoprostatico`).modal('toggle');
	}

	function limpiarAntigenoProstatico() {
		cajaResultadoAntigenoProstatico.value = "0.0 ng/ml";
	}

	$('#antigenoprostatico').on('hidden.bs.modal', function (e) {
  		limpiarAntigenoProstatico();
	});

	$('#antigenoprostatico').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionAntigenoProstatico(estudioEditar);
			 
		}
	});

	function edicionAntigenoProstatico(estudio) {
		cajaResultadoAntigenoProstatico.value = estudio.resultados[0].resultado;
	}

</script>