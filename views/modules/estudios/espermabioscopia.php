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
		        		<div class="row">
		        			<div class="col-md-8">
		        				Análisis químico
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoPHEsperma">Volumen:</label>
		        					<input class="form-control" type="text" name="cajaResultadoPHEsperma" id="cajaResultadoPHEsperma">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>5 - 7</p>
		        			</div>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="row">
		        			<div class="col-md-8">
		        				Análisis microscópico
		        			</div>
		        		</div>
		        		<br>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoZoospermia">Zoospermia:</label>
		        					<input class="form-control" type="text" name="cajaResultadoZoospermia" id="cajaResultadoZoospermia">
		        				</div>
		        			</div>
		        			<div class="col-md-2 align-self-center">
		        				<br>
		        				<p>/mm<sup>3</sup></p>
		        			</div>
		        			<div class="col-md-4">
		        				<p>Valores normales</p>
		        				<p>20 - 60,000,000 /mm<sup>3</sup> </p>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoVivosEsperma">Vivos:</label>
		        					<input class="form-control" type="text" name="cajaResultadoVivosEsperma" id="cajaResultadoVivosEsperma">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>%</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoMuertosEsperma">Muertos:</label>
		        					<input class="form-control" type="text" name="cajaResultadoMuertosEsperma" id="cajaResultadoMuertosEsperma">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>%</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-4">
		        				De los vivos son:
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoMovilesProgresivos">Móviles progresivos:</label>
		        					<input class="form-control" type="text" name="cajaResultadoMovilesProgresivos" id="cajaResultadoMovilesProgresivos">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>%</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoMovilesNoProgresivos">Móviles sin progresión:</label>
		        					<input class="form-control" type="text" name="cajaResultadoMovilesNoProgresivos" id="cajaResultadoMovilesNoProgresivos">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>%</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-4">
		        				Morfología:
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoNormalEsperma">Normal:</label>
		        					<input class="form-control" type="text" name="cajaResultadoNormalEsperma" id="cajaResultadoNormalEsperma">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>%</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-6">
		        				<div class="form-group">
		        					<label for="cajaResultadoAnormalEsperma">Anormal:</label>
		        					<input class="form-control" type="text" name="cajaResultadoAnormalEsperma" id="cajaResultadoAnormalEsperma">
		        				</div>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				<br>
		        				<p>%</p>
		        			</div>
		        			<div class="col-md-3 align-self-center">
		        				
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
		        					<label for="cajaObservacionesEsperma">Observaciones: </label>
		        					<textarea class="form-control" id="cajaObservacionesEsperma" rows="3" name="cajaObservacionesEsperma"></textarea>
		        				</div>
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
		// if (cajaResultadoTomaDeMuestra.value && cajaResultadoRecepcionDeMuestra.value && cajaResultadoLicuefaccion.value && cajaResultadoVolumen.value && cajaResultadoPHEsperma.value && cajaResultadoZoospermia.value && cajaResultadoVivosEsperma.value && cajaResultadoMuertosEsperma.value && cajaResultadoMovilesProgresivos.value && cajaResultadoMovilesNoProgresivos.value && cajaResultadoNormalEsperma.value && cajaResultadoAnormalEsperma.value) {

			let estudio = {
				idmodal: 'espermabioscopia',
				nombre: 'Espermabioscopía',
				resultados:
				[{
					nombre: 'Toma de muestra',
					resultado: cajaResultadoTomaDeMuestra.value,
					limites: []
				},
				{
					nombre: 'Recepción de muestra',
					resultado: cajaResultadoRecepcionDeMuestra.value,
					limites: []
				},
				{
					nombre: 'Licuefacción',
					resultado: cajaResultadoLicuefaccion.value,
					limites: ['Hasta 45 min.']
				},
				{
					nombre: 'Volumen',
					resultado: cajaResultadoVolumen.value,
					limites: ['2 - 4 ml']
				},
				{
					nombre: 'PH',
					resultado: cajaResultadoPHEsperma.value,
					limites: ['5 - 7']
				},
				{
					nombre: 'Zoospermia',
					resultado: cajaResultadoZoospermia.value,
					limites: ['20 - 60,000,000 /mm <sup>3</sup>']
				},
				{
					nombre: 'Vivos',
					resultado: cajaResultadoVivosEsperma.value,
					limites: []
				},
				{
					nombre: 'Muertos',
					resultado: cajaResultadoMuertosEsperma.value,
					limites: []
				},
				{
					nombre: 'Móviles progresivos',
					resultado: cajaResultadoMovilesProgresivos.value,
					limites: []
				},
				{
					nombre: 'Móviles sin progresión',
					resultado: cajaResultadoMovilesNoProgresivos.value,
					limites: []
				},
				{
					nombre: 'Morfología normal',
					resultado: cajaResultadoNormalEsperma.value,
					limites: []
				},
				{
					nombre: 'Morfología anormal',
					resultado: cajaResultadoAnormalEsperma.value,
					limites: []
				},
				],
				observaciones: cajaObservacionesEsperma.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalvalidarEspermabioscopia();
			limpiarElectrolitosSericos();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalvalidarEspermabioscopia() {
		$(`#espermabioscopia`).modal('toggle');
	}

	function limpiarEspermabioscopia() {
		cajaResultadoTomaDeMuestra.value = "";
		cajaResultadoRecepcionDeMuestra.value = "";
		cajaResultadoLicuefaccion.value = "";
		cajaResultadoVolumen.value = "";
		cajaResultadoPHEsperma.value = "";
		cajaResultadoZoospermia.value = "";
		cajaResultadoVivosEsperma.value = "";
		cajaResultadoMuertosEsperma.value = "";
		cajaResultadoMovilesProgresivos.value = "";
		cajaResultadoMovilesNoProgresivos.value = "";
		cajaResultadoNormalEsperma.value = "";
		cajaResultadoAnormalEsperma.value = "";
		cajaObservacionesEsperma.value = "";
	}

	$('#espermabioscopia').on('hidden.bs.modal', function (e) {
  		limpiarEspermabioscopia();
	});


	$('#espermabioscopia').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionEspermabioscopia(estudioEditar);
			 
		}
	});

	function edicionEspermabioscopia(estudio) {
		cajaResultadoTomaDeMuestra.value = estudio.resultados[0].resultado;
		cajaResultadoRecepcionDeMuestra.value = estudio.resultados[1].resultado;
		cajaResultadoLicuefaccion.value = estudio.resultados[2].resultado;
		cajaResultadoVolumen.value = estudio.resultados[3].resultado;
		cajaResultadoPHEsperma.value = estudio.resultados[4].resultado;
		cajaResultadoZoospermia.value = estudio.resultados[5].resultado;
		cajaResultadoVivosEsperma.value = estudio.resultados[6].resultado;
		cajaResultadoMuertosEsperma.value = estudio.resultados[7].resultado;
		cajaResultadoMovilesProgresivos.value = estudio.resultados[8].resultado;
		cajaResultadoMovilesNoProgresivos.value = estudio.resultados[9].resultado;
		cajaResultadoNormalEsperma.value = estudio.resultados[10].resultado;
		cajaResultadoAnormalEsperma.value = estudio.resultados[11].resultado;
		cajaObservacionesEsperma.value = estudio.observaciones;
	}

</script>
