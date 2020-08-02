<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Amiba en fresco");
?>
<div class="modal fade" id="amibaenfresco" tabindex="-1" role="dialog" aria-labelledby="amibaenfresco" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Amiba en fresco</h5>
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
	        	<button type="button" class="btn btn-primary" onclick="validarAmibaEnFresco()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	const cajaResultadoAmibaEnFresco = document.getElementById('cajaResultadoAmibaEnFresco');
	const cajaObservacionesAmibaEnFresco = document.getElementById('cajaObservacionesAmibaEnFresco');
	
	function validarAmibaEnFresco() {
		if (cajaResultadoAmibaEnFresco.value) {

			let estudio = {
				nombre: 'Amiba en fresco',
				resultados:
				[{
					resultado: cajaResultadoAmibaEnFresco.value,
					observaciones: cajaObservacionesAmibaEnFresco.value
				}],
				costo: <?php echo $respuesta["costo"]; ?>
			}

			agregarEstudio(estudio);
			cerrarModalAmibaEnFresco();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalAmibaEnFresco() {
		$(`#amibaenfresco`).modal('toggle');
	}

</script>