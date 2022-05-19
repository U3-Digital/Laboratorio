<?php

	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Antiestreptolisina");

?>
<div class="modal fade" id="antiestreptolisina" tabindex="-1" role="dialog" aria-labelledby="antiestreptolisina" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Antiestreptolisina</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAntiestreptolisina">Antiestreptolisina:</label>
		        			<input class="form-control" type="text" id="cajaResultadoAntiestreptolisina" name="cajaResultadoAntiestreptolisina" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<p>Límites de referencia</p>
		        		<p>Negativo</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarAntiestreptolisina()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	const cajaResultadoAntiestreptolisina = document.getElementById('cajaResultadoAntiestreptolisina');
	
	function validarAntiestreptolisina() {
		// if (cajaResultadoAntiestreptolisina.value) {

			let estudio = {
				idmodal: 'antiestreptolisina',
				nombre: 'Antiestreptolisina',
				resultados: 
					[{
						nombre: 'Antiestreptolisina',
						resultado: cajaResultadoAntiestreptolisina.value,
						limites: ['Negativo']
					}],
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalAntiestreptolisina();
			limpiarAntiestreptolisina();
			
		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalAntiestreptolisina() {
		$(`#antiestreptolisina`).modal('toggle');
	}

	function limpiarAntiestreptolisina() {
		cajaResultadoAntiestreptolisina.value = "Negativo";
	}

	$('#antiestreptolisina').on('hidden.bs.modal', function (e) {
  		limpiarAntiestreptolisina();
	});

	$('#antiestreptolisina').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionAntiestreptolisina(estudioEditar);
			 
		}
	});

	function edicionAntiestreptolisina(estudio) {
		cajaResultadoAntiestreptolisina.value = estudio.resultados[0].resultado;
	}

</script>