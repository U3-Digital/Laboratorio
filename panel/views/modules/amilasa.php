<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Amilasa");
?>
<div class="modal fade" id="amilasa" tabindex="-1" role="dialog" aria-labelledby="amilasa" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Amilasa</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAmilasa">Amilasa:</label>
		        			<input class="form-control" type="text" id="cajaResultadoAmilasa" name="cajaResultadoAmilasa">
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<p>Límites de referencia</p>
		        		<p>87-123</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarAmilasa()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	const cajaResultadoAmilasa = document.getElementById('cajaResultadoAmilasa');
	
	function validarAmilasa() {
		if (cajaResultadoAmilasa.value) {

			let estudio = {
				idmodal: 'amilasa',
				nombre: 'Amilasa',
				resultados: 
				[{
					nombre: 'Amilasa',
					resultado: cajaResultadoAmilasa.value,
					limites: ['87-123']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalAmilasa();
			limpiarAmilasa();
			
		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalAmilasa() {
		$(`#amilasa`).modal('toggle');
	}

	function limpiarAmilasa() {
		cajaResultadoAmilasa.value = "";
	}

	$('#amilasa').on('hidden.bs.modal', function (e) {
  		limpiarAmilasa();
	});

	$('#amilasa').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionAmilasa(estudioEditar);
			 
		}
	});

	function edicionAmilasa(estudio) {
		cajaResultadoAmilasa.value = estudio.resultados[0].resultado;
	}

</script>