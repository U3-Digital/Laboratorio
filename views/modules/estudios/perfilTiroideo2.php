<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil tiroideo 2");
?>
<div class="modal fade" id="perfiltiroideo2" tabindex="-1" role="dialog" aria-labelledby="perfiltiroideo" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">perfiltiroideo2
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil tiroideo 2</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row justify-content-center">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoT4Total">T4 Total:</label>
                                    <input class="form-control" type="text" name="cajaResultadoT4Total" id="cajaResultadoT4Total">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                Límites de referencia
                                <p>N(6.0 - 12.0 µg/dl)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoT3Captacion">T3 Captación:</label>
                                    <input class="form-control" type="text" name="cajaResultadoT3Captacion" id="cajaResultadoT3Captacion">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>N(6.0 - 12.0 µg/dl)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoFTI">FTI:</label>
                                    <input class="form-control" type="text" name="cajaResultadoFTI" id="cajaResultadoFTI">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>N(5.93 - 13.3)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoT4Libre">T4 Libre:</label>
                                    <input class="form-control" type="text" name="cajaResultadoT4Libre" id="cajaResultadoT4Libre">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>N(0.7 - 1.8 ng/ml)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoT3Total">T3 Total:</label>
                                    <input class="form-control" type="text" name="cajaResultadoT3Total" id="cajaResultadoT3Total">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>N(0.92 - 2.33 nmol/l)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTSH">TSH:</label>
                                    <input class="form-control" type="text" name="cajaResultadoTSH" id="cajaResultadoTSH">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>N(0.3 - 5.0 mUi/ml)</p>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilTiroideo()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilTiroideo2() {
        if (cajaResultadoT4Total.value && cajaResultadoT3Captacion.value && 
            cajaResultadoFTI.value && cajaResultadoT4Libre.value && 
            cajaResultadoT3Total.value && cajaResultadoTSH.value) {

			let estudio = {
				idmodal: 'perfiltiroideo2',
				nombre: 'Perfil tiroideo 2',
				resultados:
				[{
					nombre: 'T4 Total',
					resultado: cajaResultadoT4Total.value,
					limites: []
                },
                {
					nombre: 'T3 Captación',
					resultado: cajaResultadoT3Captacion.value,
					limites: []
                },
                {
					nombre: 'FTI',
					resultado: cajaResultadoFTI.value,
					limites: []
                },
                {
					nombre: 'T4 Libre',
					resultado: cajaResultadoT4Libre.value,
					limites: []
                },
                {
					nombre: 'T3 Total',
					resultado: cajaResultadoT3Total.value,
					limites: []
                },
                {
					nombre: 'TSH',
					resultado: cajaResultadoTSH.value,
					limites: []
                }],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilTiroideo2();
			limpiarPerfilTiroideo2();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalPerfilTiroideo2() {
		$(`#perfiltiroideo2`).modal('toggle');
	}

	function limpiarPerfilTiroideo2() {
        
	}

	$('#perfiltiroideo2').on('hidden.bs.modal', function (e) {
        limpiarPerfilDeHepatitisA();
	});

	$('#perfiltiroideo2').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilTiroideo2(estudioEditar);
			console.log('hey crack', estudioEditar);
		}
	});

	function edicionPerfilTiroideo2(estudio) {
        
	}

</script>