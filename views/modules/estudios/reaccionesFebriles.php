<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Reacciones febriles");
?>
<div class="modal fade" id="reaccionesfebriles" tabindex="-1" role="dialog" aria-labelledby="reaccionesfebriles" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Reacciones febriles</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoParitificoA">Paritífico A:</label>
                                    <input class="form-control" type="text" name="cajaResultadoParitificoA" id="cajaResultadoParitificoA" value="Negativo">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <p>Límites de referencia</p>
                                <p>Negativo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoParitificoB">Paritífico B:</label>
                                    <input class="form-control" type="text" name="cajaResultadoParitificoB" id="cajaResultadoParitificoB" value="Negativo">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Negativo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTificoH">Tífico H:</label>
                                    <input class="form-control" type="text" name="cajaResultadoTificoH" id="cajaResultadoTificoH" value="Negativo">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Negativo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTificoO">Tífico O:</label>
                                    <input class="form-control" type="text" name="cajaResultadoTificoO" id="cajaResultadoTificoO" value="Negativo">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Negativo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoBrucellaAbortus">Brucella abortus:</label>
                                    <input class="form-control" type="text" name="cajaResultadoBrucellaAbortus" id="cajaResultadoBrucellaAbortus" value="Negativo">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Negativo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoProteusOX19">Proteus OX-19:</label>
                                    <input class="form-control" type="text" name="cajaResultadoProteusOX19" id="cajaResultadoProteusOX19" value="Negativo">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Negativo</p>
                            </div>
                        </div>

                       
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarReaccionesFebriles()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarReaccionesFebriles() {
		/* if (cajaResultadoParitificoA.value && cajaResultadoParitificoB.value && 
            cajaResultadoTificoH.value && cajaResultadoTificoO.value && 
            cajaResultadoBrucellaAbortus.value && cajaResultadoProteusOX19.value) { */

			let estudio = {
				idmodal: 'reaccionesfebriles',
				nombre: 'Reacciones febriles',
				resultados:
				[{
					nombre: 'Paritífico A',
					resultado: cajaResultadoParitificoA.value,
					limites: ['Negativo']
				},
                {
					nombre: 'Paritífico B',
					resultado: cajaResultadoParitificoB.value,
					limites: ['Negativo']
				},
                {
					nombre: 'Tífico H',
					resultado: cajaResultadoTificoH.value,
					limites: ['Negativo']
				},
                {
					nombre: 'Tífico O',
					resultado: cajaResultadoTificoO.value,
					limites: ['Negativo']
				},
                {
					nombre: 'Brucella abortus',
					resultado: cajaResultadoBrucellaAbortus.value,
					limites: ['Negativo']
				},
                {
					nombre: 'Proteus OX-19',
					resultado: cajaResultadoProteusOX19.value,
					limites: ['Negativo']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalReaccionesFebriles();
			limpiarReaccionesFebriles();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalReaccionesFebriles() {
		$(`#reaccionesfebriles`).modal('toggle');
	}

	function limpiarReaccionesFebriles() {
		cajaResultadoParitificoA.value = 'Negativo';
        cajaResultadoParitificoB.value = 'Negativo';
        cajaResultadoTificoH.value = 'Negativo';
        cajaResultadoTificoO.value = 'Negativo';
        cajaResultadoBrucellaAbortus.value = 'Negativo';
        cajaResultadoProteusOX19.value = 'Negativo';
	}

	$('#reaccionesfebriles').on('hidden.bs.modal', function (e) {
        limpiarReaccionesFebriles();
	});

	$('#reaccionesfebriles').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionReaccionesFebriles(estudioEditar);
		}
	});

	function edicionReaccionesFebriles(estudio) {
        cajaResultadoParitificoA.value = estudio.resultados[0].resultado;
        cajaResultadoParitificoB.value = estudio.resultados[1].resultado;
        cajaResultadoTificoH.value = estudio.resultados[2].resultado;
        cajaResultadoTificoO.value = estudio.resultados[3].resultado;
        cajaResultadoBrucellaAbortus.value = estudio.resultados[4].resultado;
        cajaResultadoProteusOX19.value = estudio.resultados[5].resultado;
    }

</script>