<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil tiroideo 2");
?>
<div class="modal fade" id="perfiltiroideo2" tabindex="-1" role="dialog" aria-labelledby="perfiltiroideo" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
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
                                    <label for="cajaResultadoTSH2">TSH:</label>
                                    <input class="form-control" type="text" name="cajaResultadoTSH2" id="cajaResultadoTSH2">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                Límites de referencia
                                <p>0.42 - 5.45 µUi/ml</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTiroxinaTotal">T4 Total (Tiroxina total):</label>
                                    <input class="form-control" type="text" name="cajaResultadoTiroxinaTotal" id="cajaResultadoTiroxinaTotal">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                Límites de referencia
                                <p>5.13 - 14.05 µg/ml</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTiroxinaLibre">T4 Libre (Tiroxina libre):</label>
                                    <input class="form-control" type="text" name="cajaResultadoTiroxinaLibre" id="cajaResultadoTiroxinaLibre">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>0.76 - 2.24 ng/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTriyodotironinaTotal">T3 Total (Triyodotironina total):</label>
                                    <input class="form-control" type="text" name="cajaResultadoTriyodotironinaTotal" id="cajaResultadoTriyodotironinaTotal">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>0.84 - 2.02 ng/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTriyodotironinaLibre">T3 Libre (Triyodotironina libre):</label>
                                    <input class="form-control" type="text" name="cajaResultadoTriyodotironinaLibre" id="cajaResultadoTriyodotironinaLibre">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>2.02 - 4.43 pg/ml</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <small><p>Método: Eci vitros quimioluminiscencia</p></small>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilTiroideo2()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilTiroideo2() {
        // if (cajaResultadoTSH2.value && cajaResultadoTiroxinaTotal.value && cajaResultadoTiroxinaLibre.value && cajaResultadoTriyodotironinaTotal.value && cajaResultadoTriyodotironinaLibre.value) {

			let estudio = {
				idmodal: 'perfiltiroideo2',
				nombre: 'Perfil tiroideo 2',
				resultados:
				[{
					nombre: 'TSH',
					resultado: cajaResultadoTSH2.value,
					limites: ['0.42 - 5.45 µUi/ml']
                },
                {
					nombre: 'T4 Total (Tiroxina total)',
					resultado: cajaResultadoTiroxinaTotal.value,
					limites: ['5.13 - 14.05 µg/ml']
                },
                {
					nombre: 'T4 Libre (Tiroxina libre)',
					resultado: cajaResultadoTiroxinaLibre.value,
					limites: ['0.76 - 2.24 ng/dl']
                },
                {
					nombre: 'T3 Total (Triyodotironina total)',
					resultado: cajaResultadoTriyodotironinaTotal.value,
					limites: ['0.84 - 2.02 ng/dl']
                },
                {
					nombre: 'T3 Total (Triyodotironina libre)',
					resultado: cajaResultadoTriyodotironinaLibre.value,
					limites: ['2.02 - 4.43 pg/ml']
                }],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilTiroideo2();
			limpiarPerfilTiroideo2();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilTiroideo2() {
		$(`#perfiltiroideo2`).modal('toggle');
	}

	function limpiarPerfilTiroideo2() {
        cajaResultadoTSH2.value = '';
        cajaResultadoTiroxinaTotal.value = '';
        cajaResultadoTiroxinaLibre.value = '';
        cajaResultadoTriyodotironinaTotal.value = '';
        cajaResultadoTriyodotironinaLibre.value = '';
	}

	$('#perfiltiroideo2').on('hidden.bs.modal', function (e) {
        limpiarPerfilTiroideo2();
	});

	$('#perfiltiroideo2').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilTiroideo2(estudioEditar);
			 
		}
	});

	function edicionPerfilTiroideo2(estudio) {
        cajaResultadoTSH2.value = estudio.resultados[0].resultado;
        cajaResultadoTiroxinaTotal.value = estudio.resultados[1].resultado;
        cajaResultadoTiroxinaLibre.value = estudio.resultados[2].resultado;
        cajaResultadoTriyodotironinaTotal.value = estudio.resultados[3].resultado;
        cajaResultadoTriyodotironinaLibre.value = estudio.resultados[4].resultado;
	}

</script>