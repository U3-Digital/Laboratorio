<?php
  $controller = new Controller();
  $respuesta = $controller -> ctlBuscarEstudio("Covid-19");
?>
<div class="modal fade" id="covid19" tabindex="-1" role="dialog" aria-labelledby="covid19" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Covid-19</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAmibaEnFresco">Resultado:</label>
		        			<input class="form-control" type="text" name="cajaResultadoAmibaEnFresco" id="cajaResultadoAmibaEnFresco" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
						    <label for="cajaObservacionesAmibaEnFresco">Observaciones:</label>
						    <textarea class="form-control" id="cajaObservacionesAmibaEnFresco" rows="3" name="cajaObservacionesAmibaEnFresco"></textarea>
						  </div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCovid19()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarCovid19() {

			let estudio = {
				idmodal: 'covid19',
				nombre: 'Covid-19',
				resultados:
				[{
					nombre: 'Amiba en fresco',
					resultado: cajaResultadoAmibaEnFresco.value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalCovid19();
			limpiarCovid19();
	}

	function cerrarModalCovid19() {
		$(`#covid19`).modal('toggle');
	}

	function limpiarCovid19() {
		
	}

	$('#covid19').on('hidden.bs.modal', function (e) {
    limpiarCovid19();
	});

	$('#covid19').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionCovid19(estudioEditar);
		}
	});

	function edicionCovid19(estudio) {
		
	}

</script>
