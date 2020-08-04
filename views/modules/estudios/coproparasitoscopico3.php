<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Coproparasitoscopico 3");
?>
<div class="modal fade" id="coproparasitoscopico3" tabindex="-1" role="dialog" aria-labelledby="coproparasitoscopico3" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Coproparasitoscópico 3</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="row">
		        			<div class="col-md-12">
		        				<div class="form-group">
				        			<label for="cajaResultadoCoproparasitoscopico1">Resultado 1:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCoproparasitoscopico1" id="cajaResultadoCoproparasitoscopico1" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12">
		        				<div class="form-group">
				        			<label for="cajaResultadoCoproparasitoscopico2">Resultado 2:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCoproparasitoscopico2" id="cajaResultadoCoproparasitoscopico2"  required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12">
		        				<div class="form-group">
				        			<label for="cajaResultadoCoproparasitoscopico3">Resultado 3:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCoproparasitoscopico3" id="cajaResultadoCoproparasitoscopico3" required>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
						    <label for="cajaObservacionesCoproparasitoscopico3">Observaciones:</label>
						    <textarea class="form-control" id="cajaObservacionesCoproparasitoscopico3" rows="3" name="cajaObservacionesCoproparasitoscopico3"></textarea>
						  </div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCoproparasitoscopico3()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	// const cajaResultadoAmibaEnFresco = document.getElementById('cajaResultadoAmibaEnFresco');
	// const cajaObservacionesAmibaEnFresco = document.getElementById('cajaObservacionesAmibaEnFresco');
	
	function validarCoproparasitoscopico3() {
		if (cajaResultadoCoproparasitoscopico1.value && cajaResultadoCoproparasitoscopico2.value && cajaResultadoCoproparasitoscopico3.value) {

			let estudio = {
				nombre: 'Coproparasitoscópico 3',
				resultados:
				[{
					resultado: cajaResultadoCoproparasitoscopico1.value,
					limites: []
				},
				{
					resultado: cajaResultadoCoproparasitoscopico2.value,
					limites: []
				},
				{
					resultado: cajaResultadoCoproparasitoscopico3.value,
					limites: []
				}],
				observaciones: cajaObservacionesCoproparasitoscopico3.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalCoproparasitoscopico3();
			limpiarCoproparasitoscopico3();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalCoproparasitoscopico3() {
		$(`#coproparasitoscopico3`).modal('toggle');
	}

	function limpiarCoproparasitoscopico3() {
		cajaResultadoCoproparasitoscopico1.value = "";
		cajaResultadoCoproparasitoscopico2.value = "";
		cajaResultadoCoproparasitoscopico3.value = "";

	}

</script>