<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Espermabioscopia");
?>
<div class="modal fade" id="espermabioscopia" tabindex="-1" role="dialog" aria-labelledby="espermabioscopia" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Espermabioscopía</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		
		        		<div class="row">
		        			<div class="col-md-8">
		        				Análisis físico
		        			</div>
		        		</div>
		        		<br>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoTomaDeMuestra">Toma de muestra:</label>
		        					<input class="form-control" type="text" name="cajaResultadoTomaDeMuestra" id="cajaResultadoTomaDeMuestra">
		        				</div>
		        			</div>
		        			<div class="col-md-3">
		        				
		        			</div>
		        			<div class="col-md-3">
		        				<p>Valores normales</p>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoRecepcionDeMuestra">Recepción de muestra:</label>
		        					<input class="form-control" type="text" name="cajaResultadoRecepcionDeMuestra" id="cajaResultadoRecepcionDeMuestra">
		        				</div>
		        			</div>
		        			<div class="col-md-3">
		        				
		        			</div>
		        			<div class="col-md-3">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoLicuefaccion">Licuefacción:</label>
		        					<input class="form-control" type="text" name="cajaResultadoLicuefaccion" id="cajaResultadoLicuefaccion">
		        				</div>
		        			</div>
		        			<div class="col-md-3">
		        				
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>Hasta 45 min.</p>
		        			</div>
		        		</div>
						<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoVolumen">Volumen:</label>
		        					<input class="form-control" type="text" name="cajaResultadoVolumen" id="cajaResultadoVolumen">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>ml</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>2 - 4 ml</p>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarEspermabioscopia()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarEspermabioscopia() {
		if (cajaResultadoSodioElectrolitos.value && cajaResultadoPotasioElectrolitos.value && cajaResultadoClorurosElectrolitos.value) {

			let estudio = {
				nombre: 'Electrolitos séricos',
				resultados:
				[{
					nombre: 'Sodio',
					resultado: cajaResultadoSodioElectrolitos.value,
					limites: ['137 - 145 mmol/L']
				},
				{
					nombre: 'Potasio',
					resultado: cajaResultadoPotasioElectrolitos.value,
					limites: ['3.5 - 5.1 mmol/L']
				},
				{
					nombre: 'Cloruros',
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

	function cerrarModalvalidarEspermabioscopia() {
		$(`#espermabioscopia`).modal('toggle');
	}

	function limpiarvalidarEspermabioscopia() {
		cajaResultadoSodioElectrolitos.value = "";
		cajaResultadoPotasioElectrolitos.value = "";
		cajaResultadoClorurosElectrolitos.value = "";
	}

	$('#espermabioscopia').on('hidden.bs.modal', function (e) {
  		limpiarvalidarEspermabioscopia();
	});

</script>