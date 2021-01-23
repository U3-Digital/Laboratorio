<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Antigeno carcinoembrionario");
?>
<div class="modal fade" id="antigenocarcinoembrionario" tabindex="-1" role="dialog" aria-labelledby="antigenocarcinoembrioanrio" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Antígeno carcinoembrionario</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAntigenoCarcinoEmbrionario">Antígeno carcinoembrionario (C.E.A):</label>
		        			<input class="form-control" type="text" id="cajaResultadoAntigenoCarcinoEmbrionario" name="cajaResultadoAntigenoCarcinoEmbrionario" required value="0.0 ng/ml">
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<p>Valores normales:</p>
		        		<p>0.0 - 5.0 ng/ml</p>
		        		<table>
		        			<tr>
								<th>
									
								</th>
								<th>
									
								</th>
		        			</tr>
		        			<tr>
		        				<td>
		        					Sujetos sanos:<br>
		        					No fumadores <br>	
		        					Fumadores:    <br>
		        				</td>
		        				<td style="padding-left: 3em;">< 3.0 ng/ml</td>
		        			</tr>
		        			<tr>
		        				<td>Afecciones no malignas: <br>
									Gastrointestinal <br>
									Cirrosis <br>
									Hepatitis <br>
									Pulmonar
		        				</td>
		        				<td style="padding-left: 3em;"> > 3.0 - 5.0 ng/ml</td>
		        			</tr>
		        			<tr>
		        				<td>Patologías malignas: <br>
									Colorrectal
									Mama
									Pulmonar
									Ovario
									Gastrointestinales
		        				</td>
		        				<td style="padding-left: 3em;"> > 10.0 ng/ml</td>
		        			</tr>
		        			<tr>
		        				<td>*Método de medición: Swa-Roche - Quimioluminiscencia</td>
		        				<td></td>
		        			</tr>
		        		</table>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarAntigenoCarcinoembrionario()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	// const cajaResultadoAmilasa = document.getElementById('cajaResultadoAmilasa');
	
	function validarAntigenoCarcinoembrionario() {
		// if (cajaResultadoAntigenoCarcinoEmbrionario.value) {

			let estudio = {
				idmodal: 'antigenocarcinoembrionario',
				nombre: 'Antígeno carcinoembrionario',
				resultados: 
				[{
					nombre: 'Antígeno carcinoembrionario',
					resultado: cajaResultadoAntigenoCarcinoEmbrionario.value,
					limites: ['0.0 - 5.0 ng/ml']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalAntigenoCarcinoembrionario();
			limpiarAntigenoCarcinoembrionario();
			
		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalAntigenoCarcinoembrionario() {
		$(`#antigenocarcinoembrionario`).modal('toggle');
	}

	function limpiarAntigenoCarcinoembrionario() {
		cajaResultadoAntigenoCarcinoEmbrionario.value = "0.0 ng/ml";
	}

	$('#antigenocarcinoembrionario').on('hidden.bs.modal', function (e) {
  		limpiarAntigenoCarcinoembrionario();
	});


	$('#antigenocarcinoembrionario').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionAntigenoCarcinoembrionario(estudioEditar);
			 
		}
	});

	function edicionAntigenoCarcinoembrionario(estudio) {
		cajaResultadoAntigenoCarcinoEmbrionario.value = estudio.resultados[0].resultado;
	}

</script>