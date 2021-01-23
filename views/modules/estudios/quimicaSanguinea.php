<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Quimica sanguinea");
?>
<div class="modal fade" id="quimicasanguinea" tabindex="-1" role="dialog" aria-labelledby="quimicasanguinea" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Química sanguínea</h5>
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
                                    <label for="cajaResultadoGlucosaQS">Glucosa:</label>
                                    <input class="form-control" type="text" name="cajaResultadoGlucosaQS" id="cajaResultadoGlucosaQS">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <p>Límites de referencia</p>
                                <p>70 - 110 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoAcidoUricoQS">Ácido úrico:</label>
                                    <input class="form-control" type="text" name="cajaResultadoAcidoUricoQS" id="cajaResultadoAcidoUricoQS">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>3.2 - 7.2 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoUreaQS">Urea:</label>
                                    <input class="form-control" type="text" name="cajaResultadoUreaQS" id="cajaResultadoUreaQS" onkeyup="calcularNitrogenoUreico(event.target.value)">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>15 - 45 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoCreatininaQS">Creatinina:</label>
                                    <input class="form-control" type="text" name="cajaResultadoCreatininaQS" id="cajaResultadoCreatininaQS">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>0.5 - 1.5 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoNitrogenoUreicoQS">Nitrógeno uréico:</label>
                                    <input class="form-control" type="text" name="cajaResultadoNitrogenoUreicoQS" id="cajaResultadoNitrogenoUreicoQS">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>6 - 25 mg/dl</p>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarQuimicaSanguinea()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

    calcularNitrogenoUreico(0)

    function calcularNitrogenoUreico(urea) {
        if (!isNaN(urea)) {
            cajaResultadoNitrogenoUreicoQS.value = Number.parseFloat(urea / 2.1428).toFixed(3);
        }
    }

	function validarQuimicaSanguinea() {
		/* if (cajaResultadoGlucosaQS.value && cajaResultadoAcidoUricoQS.value && 
            cajaResultadoUreaQS.value && cajaResultadoCreatininaQS.value && cajaResultadoNitrogenoUreicoQS.value) { */

			let estudio = {
				idmodal: 'quimicasanguinea',
				nombre: 'Química sanguínea',
				resultados:
				[{
					nombre: 'Glucosa',
					resultado: cajaResultadoGlucosaQS.value,
					limites: ['70 - 110 mg/dl']
				},
                {
					nombre: 'Ácido úrico',
					resultado: cajaResultadoAcidoUricoQS.value,
					limites: ['3.2 - 7.2 mg/dl']
				},
                {
					nombre: 'Urea',
					resultado: cajaResultadoUreaQS.value,
					limites: ['15 - 45 mg/dl']
				},
                {
					nombre: 'Creatinina',
					resultado: cajaResultadoCreatininaQS.value,
					limites: ['0.5 - 1.5 mg/dl']
				},
                {
					nombre: 'Nitrógeno uréico',
					resultado: cajaResultadoNitrogenoUreicoQS.value,
					limites: ['6 - 25 mg/dl']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalQuimicaSanguinea();
			limpiarQuimicaSanguinea();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalQuimicaSanguinea() {
		$(`#quimicasanguinea`).modal('toggle');
	}

	function limpiarQuimicaSanguinea() {
		cajaResultadoGlucosaQS.value = '';
        cajaResultadoAcidoUricoQS.value = '';
        cajaResultadoUreaQS.value = '';
        cajaResultadoCreatininaQS.value = '';
        cajaResultadoNitrogenoUreicoQS.value = '';
	}

	$('#quimicasanguinea').on('hidden.bs.modal', function (e) {
        limpiarQuimicaSanguinea();
	});

	$('#quimicasanguinea').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionQuimicaSanguinea(estudioEditar);
		}
	});

	function edicionQuimicaSanguinea(estudio) {
        cajaResultadoGlucosaQS.value = estudio.resultados[0].resultado;
        cajaResultadoAcidoUricoQS.value = estudio.resultados[1].resultado;
        cajaResultadoUreaQS.value = estudio.resultados[2].resultado;
        cajaResultadoCreatininaQS.value = estudio.resultados[3].resultado;
        cajaResultadoNitrogenoUreicoQS.value = estudio.resultados[4].resultado;
	}

</script>