<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Coprologico");
?>
<div class="modal fade" id="coprologico" tabindex="-1" role="dialog" aria-labelledby="coprologico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Coprológico</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<br class="bre">
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="caja">Leucocitos:</label>
				        			<input class="form-control" type="text" id="caja" name="caja" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4">
				        		<p>Rangos normales</p>
				        		<p>5,000 - 11,000 /mm<sup>3</sup></p>
				        	</div>
		        		</div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoHemoglobina">Hemoglobina:</label>
				        			<input class="form-control" type="text" id="cajaResultadoHemoglobina" name="cajaResultadoHemoglobina" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>12 - 16 g/dL</p>
				        	</div>
				        </div>	
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoHematocrito">Hematocrito:</label>
				        			<input class="form-control" type="text" id="cajaResultadoHematocrito" name="cajaResultadoHematocrito" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>37 - 47 %</p>
				        	</div>
				        </div>	 
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoConcentracionMediaHemoglobina">Concentracion media de hemoglobina:</label>
				        			<input class="form-control" type="text" id="cajaResultadoConcentracionMediaHemoglobina" name="cajaResultadoConcentracionMediaHemoglobina" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>33 - 37 g/dL</p>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoVolumenGlobularMedio">Volumen globular medio:</label>
				        			<input class="form-control" type="text" id="cajaResultadoVolumenGlobularMedio" name="cajaResultadoVolumenGlobularMedio" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>81 - 99 fL</p>
				        	</div>
				        </div>       		
		        	</div>
		        	<div class="col-md-6">
		        		<div class="row">
		        			<div class="col-md-8">
		        				<p class="text-center">Análisis microscópico:</p>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajas">Linfocitos:</label>
				        			<input class="form-control" type="text" id="cajas" name="cajas" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4">
				        		<p>Rangos normales</p>
				        		<p>20 - 52 %</p>
				        	</div>
		        		</div>
		        	</div>
		        </div>

		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCoprologico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	
	
	function validarCoprologico() {
		if (1 == 1) {

			let estudio = {
				nombre: 'Coprologico',
				resultados: 
					[{
						resultado: caja.value,
						limites: ['5,000 - 11,000']
					}],
				costo: <?php echo $respuesta["costo"]; ?>
			}

			agregarEstudio(estudio);
			cerrarModalCoprologico();
			limpiarCoprologico();
		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalCoprologico() {
		$(`#coprologico`).modal('toggle');
	}

	function limpiarCoprologico() {
		

	}
</script>