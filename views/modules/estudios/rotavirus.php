<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Rotavirus");
?>
<div class="modal fade" id="rotavirus" tabindex="-1" role="dialog" aria-labelledby="rotavirus" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Rotavirus o rotatest</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoRotavirus">Rotavirus:</label>
                                    <input class="form-control" type="text" name="cajaResultadoRotavirus" id="cajaResultadoRotavirus">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaObservacionesRotavirus">Observaciones:</label>
                                    <textarea class="form-control" id="cajaObservacionesRotavirus" rows="3" name="cajaObservacionesRotavirus"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarRotavirus()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarRotavirus() {
		// if (cajaResultadoRotavirus.value) {

			let estudio = {
				idmodal: 'rotavirus',
				nombre: 'Rotavirus o rotatest',
				resultados:
				[{
					nombre: 'Rotavirus',
					resultado: cajaResultadoRotavirus.value,
					limites: []
				}],
				observaciones: cajaObservacionesRotavirus.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalRotavirus();
			limpiarRotavirus();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalRotavirus() {
		$(`#rotavirus`).modal('toggle');
	}

	function limpiarRotavirus() {
        cajaResultadoRotavirus.value = '';
        cajaObservacionesRotavirus.value = '';
	}

	$('#rotavirus').on('hidden.bs.modal', function (e) {
  		limpiarRotavirus();
	});

	$('#rotavirus').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionRotavirus(estudioEditar);
			 
		}
	});

	function edicionRotavirus(estudio) {
        cajaResultadoRotavirus.value = estudio.resultados[0].resultado;
        cajaObservacionesRotavirus.value = estudio.observaciones;
	}

</script>