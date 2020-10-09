<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Prenupciales");
?>
<div class="modal fade" id="prenupciales" tabindex="-1" role="dialog" aria-labelledby="prenupciales" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Prenupciales</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row justify-content-center">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaPacientePrenupcial1">Paciente:</label>
                                            <input class="form-control" type="text" name="cajaPacientePrenupcial1" id="cajaPacientePrenupcial1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaGrupoRHPrenupcial1">Grupo sanguíneo y factor Rh:</label>
                                            <input class="form-control" type="text" id="cajaGrupoRHPrenupcial1" name="cajaGrupoRHPrenupcial1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaAnticuerposVIHPrenupcial1">Anticuerpos anti-VIH</label>
                                            <input class="form-control" type="text" name="cajaAnticuerposVIHPrenupcial1" id="cajaAnticuerposVIHPrenupcial1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaVDRLPrenupcial1">V.D.R.L:</label>
                                            <input class="form-control" type="text" name="cajaVDRLPrenupcial1" id="cajaVDRLPrenupcial1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaPacientePrenupcial2">Paciente:</label>
                                            <input class="form-control" type="text" name="cajaPacientePrenupcial2" id="cajaPacientePrenupcial2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaGrupoRHPrenupcial2">Grupo sanguíneo y factor Rh:</label>
                                            <input class="form-control" type="text" id="cajaGrupoRHPrenupcial2" name="cajaGrupoRHPrenupcial2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaAnticuerposVIHPrenupcial2">Anticuerpos anti-VIH</label>
                                            <input class="form-control" type="text" name="cajaAnticuerposVIHPrenupcial2" id="cajaAnticuerposVIHPrenupcial2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaVDRLPrenupcial2">V.D.R.L:</label>
                                            <input class="form-control" type="text" name="cajaVDRLPrenupcial2" id="cajaVDRLPrenupcial2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPrenupciales()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPrenupciales() {
        /* if (cajaPacientePrenupcial1.value && cajaGrupoRHPrenupcial1.value &&
            cajaAnticuerposVIHPrenupcial1.value && cajaVDRLPrenupcial1.value &&
            cajaPacientePrenupcial2.value && cajaGrupoRHPrenupcial2.value &&
            cajaAnticuerposVIHPrenupcial2.value && cajaVDRLPrenupcial2.value) { */

			let estudio = {
				idmodal: 'prenupciales',
				nombre: 'Prenupciales',
				resultados:
				[{
					nombre: 'Paciente',
					resultado: cajaPacientePrenupcial1.value,
					limites: ['']
                },
                {
                    nombre: 'Grupo sanguíneo y factor RH',
                    resultado: cajaGrupoRHPrenupcial1.value,
                    limites: ['']
                },
                {
                    nombre: 'Anticuepos anti-VIH',
                    resultado: cajaAnticuerposVIHPrenupcial1.value,
                    limites: ['Negativo']
                },
                {
                    nombre: 'V.D.R.L',
                    resultado: cajaVDRLPrenupcial1.value,
                    limites: ['Negativo']
                },
                {
					nombre: 'Paciente',
					resultado: cajaPacientePrenupcial2.value,
					limites: ['']
                },
                {
                    nombre: 'Grupo sanguíneo y factor RH',
                    resultado: cajaGrupoRHPrenupcial2.value,
                    limites: ['']
                },
                {
                    nombre: 'Anticuepos anti-VIH',
                    resultado: cajaAnticuerposVIHPrenupcial2.value,
                    limites: ['Negativo']
                },
                {
                    nombre: 'V.D.R.L',
                    resultado: cajaVDRLPrenupcial2.value,
                    limites: ['Negativo']
                }],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPrenupciales();
			limpiarModalPrenupciales();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPrenupciales() {
		$(`#prenupciales`).modal('toggle');
	}

	function limpiarModalPrenupciales() {
        cajaPacientePrenupcial1.value = '';
        cajaGrupoRHPrenupcial1.value = '';
        cajaAnticuerposVIHPrenupcial1.value = '';
        cajaVDRLPrenupcial1.value = '';
        cajaPacientePrenupcial2.value = '';
        cajaGrupoRHPrenupcial2.value = '';
        cajaAnticuerposVIHPrenupcial2.value = '';
        cajaVDRLPrenupcial2.value = '';
	}

	$('#prenupciales').on('hidden.bs.modal', function (e) {
        limpiarModalPrenupciales();
	});

	$('#prenupciales').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPrenupciales(estudioEditar);
		}
	});

	function edicionPrenupciales(estudio) {
        cajaPacientePrenupcial1.value = estudio.resultados[0].resultado;
        cajaGrupoRHPrenupcial1.value = estudio.resultados[1].resultado;
        cajaAnticuerposVIHPrenupcial1.value = estudio.resultados[2].resultado;
        cajaVDRLPrenupcial1.value = estudio.resultados[3].resultado;
        cajaPacientePrenupcial2.value = estudio.resultados[4].resultado;
        cajaGrupoRHPrenupcial2.value = estudio.resultados[5].resultado;
        cajaAnticuerposVIHPrenupcial2.value = estudio.resultados[6].resultado;
        cajaVDRLPrenupcial2.value = estudio.resultados[7].resultado;
	}

</script>