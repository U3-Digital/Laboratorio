<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Coproparasitoscopico");
?>
<div class="modal fade" id="coproparasitoscopico" tabindex="-1" role="dialog" aria-labelledby="coproparasitoscopico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Coproparasitoscópico</h5>
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
				        			<label for="cajaResultadoCoproparasitoscopicoCopro">Resultado :</label>
				        			<input class="form-control" type="text" name="cajaResultadoCoproparasitoscopicoCopro" id="cajaResultadoCoproparasitoscopicoCopro" required>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
						    <label for="cajaObservacionesCoproparasitoscopico">Observaciones:</label>
						    <textarea class="form-control" id="cajaObservacionesCoproparasitoscopico" rows="3" name="cajaObservacionesCoproparasitoscopico"></textarea>
						  </div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCoproparasitoscopico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	// const cajaResultadoCoproparasitoscopico = document.getElementById('cajaResultadoCoproparasitoscopico');
	// const cajaObservacionesAmibaEnFresco = document.getElementById('cajaObservacionesAmibaEnFresco');
	
	function validarCoproparasitoscopico() {
		// if (cajaResultadoCoproparasitoscopicoCopro.value) {

			let estudio = {
				idmodal: 'coproparasitoscopico',
				nombre: 'Coproparasitoscópico',
				resultados:
				[{
					nombre: 'Coproparasitoscópico',
					resultado: cajaResultadoCoproparasitoscopicoCopro.value,
					limites: []
				}],
				observaciones: cajaObservacionesCoproparasitoscopico.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalCoproparasitoscopico();
			limpiarCoproparasitoscopico();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalCoproparasitoscopico() {
		$(`#coproparasitoscopico`).modal('toggle');
	}

	function limpiarCoproparasitoscopico() {
		cajaResultadoCoproparasitoscopico.value = "";
	}

	$('#coproparasitoscopico').on('hidden.bs.modal', function (e) {
  		limpiarCoproparasitoscopico();
	});

	$('#coproparasitoscopico').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionCoproparasitoscopico(estudioEditar);
			 
		}
	});

	function edicionCoproparasitoscopico(estudio) {
		cajaResultadoCoproparasitoscopicoCopro.value = estudio.resultados[0].resultado;
		cajaObservacionesCoproparasitoscopico.value = estudio.observaciones;
	}

</script>
