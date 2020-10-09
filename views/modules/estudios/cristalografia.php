<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Cristalografia");
?>
<div class="modal fade" id="cristalografia" tabindex="-1" role="dialog" aria-labelledby="cristalografia" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Cristalografía</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoCristalografia">Resultado:</label>
		        			<input class="form-control" type="text" name="cajaResultadoCristalografia" id="cajaResultadoCristalografia" required>
		        		</div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCristalografia()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarCristalografia() {
		// if (cajaResultadoCristalografia.value) {

			let estudio = {
				idmodal: 'cristalografia',
				nombre: 'Cristalografía',
				resultados:
				[{
					nombre: 'Cristalografía', 
					resultado: cajaResultadoCristalografia.value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalCristalografia();
			limpiarAmibaEnFresco();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalCristalografia() {
		$(`#cristalografia`).modal('toggle');
	}

	function limpiarCristalografia() {
		cajaResultadoCristalografia.value = "";
	}

	$('#cristalografia').on('hidden.bs.modal', function (e) {
  		limpiarCristalografia();
	});


	$('#cristalografia').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionCristalografia(estudioEditar);
			 
		}
	});

	function edicionCristalografia(estudio) {
		cajaResultadoCristalografia.value = estudio.resultados[0].resultado;
	}

</script>
