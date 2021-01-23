<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Citomegalovirus");
?>
<div class="modal fade" id="citomegalovirus" tabindex="-1" role="dialog" aria-labelledby="citomegalovirus" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Citomegalovirus</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="form-group">
		        			<label for="cajaResultadoCitomegalovirus">Detección CMV POR PCR:</label>
		        			<input class="form-control" type="text" name="cajaResultadoCitomegalovirus" id="cajaResultadoCitomegalovirus" required value="No detectado">
		        		</div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCitomegalovirus()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarCitomegalovirus() {
		// if (cajaResultadoCitomegalovirus.value) {

			let estudio = {
				idmodal: 'citomegalovirus',
				nombre: 'Citomegalovirus',
				resultados:
				[{
					nombre: 'Citomegalovirus',
					resultado: cajaResultadoCitomegalovirus.value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalCitomegalovirus();
			limpiarCitomegalovirus();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalCitomegalovirus() {
		$(`#citomegalovirus`).modal('toggle');
	}

	function limpiarCitomegalovirus() {
        cajaResultadoCitomegalovirus.value = "No detectado";
	}

	$('#citomegalovirus').on('hidden.bs.modal', function (e) {
        limpiarCitomegalovirus();
	});

	$('#citomegalovirus').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionCitomegalovirus(estudioEditar);
		}
	});

	function edicionCitomegalovirus(estudio) {
        cajaResultadoCitomegalovirus.value = estudio.resultados[0].resultado;
	}

</script>