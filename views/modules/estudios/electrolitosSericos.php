<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Electrolitos sericos");
?>
<div class="modal fade" id="electrolitossericos" tabindex="-1" role="dialog" aria-labelledby="electrolitossericos" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Electrolitos séricos</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoSodioElectrolitos">Sodio:</label>
		        			<input class="form-control" type="text" name="cajaResultadoSodioElectrolitos" id="cajaResultadoSodioElectrolitos" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>mmol/L</p>
		        	</div>
		        	<div class="col-md-3">
		        		<p>Límites de referencia</p>
						<p>137 - 145 mmol/L</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoPotasioElectrolitos">Potasio:</label>
		        			<input class="form-control" type="text" name="cajaResultadoPotasioElectrolitos" id="cajaResultadoPotasioElectrolitos" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>mmol/L</p>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
						<p>3.5 - 5.1 mmol/L</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoClorurosElectrolitos">Cloruros:</label>
		        			<input class="form-control" type="text" name="cajaResultadoClorurosElectrolitos" id="cajaResultadoClorurosElectrolitos" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>mmol/L</p>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
						<p>98 - 107 mmol/L</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarElectrolitosSericos()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarElectrolitosSericos() {
		if (cajaResultadoSodioElectrolitos.value && cajaResultadoPotasioElectrolitos.value && cajaResultadoClorurosElectrolitos.value) {

			let estudio = {
				nombre: 'Electrolitos séricos',
				resultados:
				[{
					resultado: cajaResultadoSodioElectrolitos.value,
					limites: ['137 - 145 mmol/L']
				},
				{
					resultado: cajaResultadoPotasioElectrolitos.value,
					limites: ['3.5 - 5.1 mmol/L']
				},
				{
					resultado: cajaResultadoClorurosElectrolitos.value,
					limites: ['98 - 107 mmol/L']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalElectrolitosSericos();
			limpiarElectrolitosSericos();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalElectrolitosSericos() {
		$(`#electrolitossericos`).modal('toggle');
	}

	function limpiarElectrolitosSericos() {
		cajaResultadoSodioElectrolitos.value = "";
		cajaResultadoPotasioElectrolitos.value = "";
		cajaResultadoClorurosElectrolitos.value = "";
	}

</script>