<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("HGC");
?>
<div class="modal fade" id="hcg" tabindex="-1" role="dialog" aria-labelledby="hcg" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">HCG</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="form-group">
		        			<label for="cajaResultadoHCGBeta">HCG - Beta:</label>
		        			<input class="form-control" type="text" name="cajaResultadoHCGBeta" id="cajaResultadoHCGBeta" required>
		        		</div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarHGC()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarHGC() {
		// if (cajaResultadoHCGBeta.value) {

			let estudio = {
				idmodal: 'hcg',
				nombre: 'HCG',
				resultados:
				[{
					nombre: 'HCG',
					resultado: cajaResultadoHCGBeta.value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalHCG();
			limpiarHCG();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalHCG() {
		$(`#hcg`).modal('toggle');
	}

	function limpiarHCG() {
		cajaResultadoHCGBeta.value = "";
	}

	$('#hcg').on('hidden.bs.modal', function (e) {
        limpiarHCG();
	});

	$('#hcg').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionHCG(estudioEditar);
			 
		}
	});

	function edicionHCG(estudio) {
        cajaResultadoHCGBeta.value = estudio.resultados[0].resultado;
	}

</script>