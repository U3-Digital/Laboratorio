    <?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Tiempo de protrombina y tromboplastina");
?>
<div class="modal fade" id="tiempodeprotrombinaytromboplastina" tabindex="-1" role="dialog" aria-labelledby="tiempodeprotrombinaytromboplastina" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Tiempo de protrombina y tromboplatina</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cajaResultadoTiempoProtombina">Tiempo de protombina (TP):</label>
                                            <input class="form-control" type="text" name="cajaResultadoTiempoProtombina" id="cajaResultadoTiempoProtombina" onkeyup="calcular()">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cajaTiempoProtrombinaControl">Tiempo de protrombina (Control):</label>
                                            <input class="form-control" type="text" name="cajaTiempoProtrombinaControl" id="cajaTiempoProtrombinaControl" onkeyup="calcular()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>s</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                Limites de referencia
                                <p>10 - 15 s</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoActividad">Actividad:</label>
                                    <input class="form-control" type="text" name="cajaResultadoActividad" id="cajaResultadoActividad">
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
                                    <label for="cajaResultadoINR">INR:</label>
                                    <input class="form-control" type="text" name="cajaResultadoINR" id="cajaResultadoINR">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>s</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoTromboplastinaParcial">Tiempo de tromboplastina parcial (TPT):</label>
                                    <input class="form-control" type="text" name="cajaResultadoTromboplastinaParcial" id="cajaResultadoTromboplastinaParcial">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>s</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>20 - 40 s</p>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarTromboplastina()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

    let tiempoProtrombina = '0';
    let tiempoProtrombinaControl = '0';

    function calcular() {
      tiempoProtrombina = cajaResultadoTiempoProtombina.value;
      tiempoProtrombinaControl = cajaTiempoProtrombinaControl.value;
      if (tiempoProtrombina && tiempoProtrombinaControl) {
            if(!isNaN(tiempoProtrombina) && !isNaN(tiempoProtrombinaControl)) {
                if (tiempoProtrombina > 0) {
                    cajaResultadoActividad.value = (Number.parseFloat(tiempoProtrombinaControl / tiempoProtrombina).toFixed(3) * 100);
                }
                if (tiempoProtrombinaControl > 0) {
                    cajaResultadoINR.value = Number.parseFloat(tiempoProtrombina / tiempoProtrombinaControl).toFixed(3);
                }
            }
        }
    }
	
	function validarTromboplastina() {
		/* if (cajaResultadoTiempoProtombina.value && cajaResultadoActividad.value &&
            cajaResultadoINR.value && cajaResultadoTromboplastinaParcial.value) { */

			let estudio = {
				idmodal: 'tiempodeprotrombinaytromboplastina',
				nombre: 'Tiempo de tromboplastina y tromboplatina',
				resultados:
				[{
					nombre: 'Tiempo de protombina (TP)',
					resultado: cajaResultadoTiempoProtombina.value,
					limites: ['10 - 15 s']
				},
                {
					nombre: 'Actividad',
					resultado: cajaResultadoActividad.value,
					limites: []
				},
                {
					nombre: 'INR',
					resultado: cajaResultadoINR.value,
					limites: []
				},
                {
					nombre: 'Tiempo de tromboplastina parcial (TPT)',
					resultado: cajaResultadoTromboplastinaParcial.value,
					limites: ['20 - 40 s']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalTromboplastina();
			limpiarTromboplastina();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalTromboplastina() {
		$(`#tiempodeprotrombinaytromboplastina`).modal('toggle');
	}

	function limpiarTromboplastina() {
		cajaResultadoTiempoProtombina.value = '';
        cajaResultadoActividad.value = '';
        cajaResultadoINR.value = '';
        cajaResultadoTromboplastinaParcial.value = '';
	}

	$('#tiempodeprotrombinaytromboplastina').on('hidden.bs.modal', function (e) {
        limpiarTromboplastina();
	});

	$('#tiempodeprotrombinaytromboplastina').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionTromboplastina(estudioEditar);
			 
		}
	});

	function edicionTromboplastina(estudio) {
		cajaResultadoTiempoProtombina.value = estudio.resultados[0].resultado;
        cajaResultadoActividad.value = estudio.resultados[1].resultado;
        cajaResultadoINR.value = estudio.resultados[2].resultado;
        cajaResultadoTromboplastinaParcial.value = estudio.resultados[3].resultado;
	}

</script>