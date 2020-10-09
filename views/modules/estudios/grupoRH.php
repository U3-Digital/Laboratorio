<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Grupo y Rh");
?>
<div class="modal fade" id="grupoyrh" tabindex="-1" role="dialog" aria-labelledby="grupoyrh" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Grupo y RH</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoGrupo">Grupo:</label>
		        			<input class="form-control" type="text" name="cajaResultadoGrupo" id="cajaResultadoGrupo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoRH">RH:</label>
		        			<input class="form-control" type="text" name="cajaResultadoRH" id="cajaResultadoRH" required>
		        		</div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarGrupoYRH()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarGrupoYRH() {
		// if (cajaResultadoGrupo.value && cajaResultadoRH.value) {

			let estudio = {
				idmodal: 'grupoyrh',
				nombre: 'Grupo y RH',
				resultados:
				[{
					nombre: 'Grupo',
					resultado: cajaResultadoGrupo.value,
					limites: []
				},
                {
                    nombre: 'RH',
					resultado: cajaResultadoRH.value,
					limites: []
                }],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalGrupoYRH();
			limpiarGrupoYRH();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalGrupoYRH() {
		$(`#grupoyrh`).modal('toggle');
	}

	function limpiarGrupoYRH() {
		cajaResultadoGrupo.value = "";
        cajaResultadoRH.value = "";
	}

	$('#grupoyrh').on('hidden.bs.modal', function (e) {
        limpiarGrupoYRH();
	});

	$('#grupoyrh').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionGrupoYRH(estudioEditar);
			 
		}
	});

	function edicionGrupoYRH(estudio) {
        cajaResultadoGrupo.value = estudio.resultados[0].resultado;
        cajaResultadoRH.value = estudio.resultados[1].resultado;
	}

</script>