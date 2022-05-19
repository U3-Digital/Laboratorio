<?php
$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Amonio plasmatico");
?>
<div class="modal fade" id="amonioplasmatico" tabindex="-1" role="dialog" aria-labelledby="amonioplasmatico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Amonio plasmático</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAmonioPlasmatico">Amonio plasmático:</label>
		        			<input class="form-control" type="text" id="cajaResultadoAmonioPlasmatico" name="cajaResultadoAmonioPlasmatico">
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<p>Límites de referencia</p>
		        		<p>9-33 UMOL/L</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarAmonioPlasmatico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	
	function validarAmonioPlasmatico() {
		// if (cajaResultadoAmonioPlasmatico.value) {

			let estudio = {
				idmodal: 'amonioplasmatico',
				nombre: 'Amonio plasmático',
				resultados: 
					[{
						nombre: 'Amonio plasmático',
						resultado: cajaResultadoAmonioPlasmatico.value,
						limites: ["9-33 UMOL/L"]
					}],
					costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalAmonioPlasmatico();
			limpiarAmonioPlasmatico();			
		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalAmonioPlasmatico() {
		$(`#amonioplasmatico`).modal('toggle');
	}

	function limpiarAmonioPlasmatico() {
		cajaResultadoAmonioPlasmatico.value = "";
	}

	$('#amonioplasmatico').on('hidden.bs.modal', function (e) {
  		limpiarAmonioPlasmatico();
	});

	$('#amonioplasmatico').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionAmonioPlasmatico(estudioEditar);
			 
		}
	});

	function edicionAmonioPlasmatico(estudio) {
		cajaResultadoAmonioPlasmatico.value = estudio.resultados[0].resultado;
	}

</script>