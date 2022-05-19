<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Progesterona");
?>
<div class="modal fade" id="progesterona" tabindex="-1" role="dialog" aria-labelledby="progesterona" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Progesterona</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cajaResultadoProgesteronaP">Progesterona:</label>
                                    <input class="form-control" type="text" name="cajaResultadoProgesteronaP" id="cajaResultadoProgesteronaP">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <table class="table table-responsive">
                                    <tr>
                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                            Valores normales
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: center; padding: 5px 10px;">Mujeres con menstruación normal</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Fase folicular</td>
                                        <td style="text-align: center; padding: 5px 10px;">0.25 - 0.54 ng/ml</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Fase lútea</td>
                                        <td style="text-align: center; padding: 5px 10px;">1.5 - 20.0 ng/ml</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Ovulación</td>
                                        <td style="text-align: center; padding: 5px 10px;">0.25 - 6.22 ng/ml</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Menopausia</td>
                                        <td style="text-align: center; padding: 5px 10px;">&lt; 0.41 ng/ml</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarProgesterona()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarProgesterona() {
		// if (cajaResultadoProgesteronaP.value) {

			let estudio = {
				idmodal: 'progesterona',
				nombre: 'Progesterona',
				resultados:
				[{
					nombre: 'Progesterona',
					resultado: cajaResultadoProgesteronaP.value,
					limites: ['Fase folicular 0.25 - 0.54 ng/ml', 'Fase lútea 1.5 - 20.0 ng/ml', 'Ovulación 0.25 - 6.22 ng/ml', 'Menopausia < 0.41 ng/ml']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalProgesterona();
			limpiarProgesterona();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalProgesterona() {
		$(`#progesterona`).modal('toggle');
	}

	function limpiarProgesterona() {
		cajaResultadoProgesteronaP.value = '';
	}

	$('#progesterona').on('hidden.bs.modal', function (e) {
		limpiarProgesterona();
	});

	$('#progesterona').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionProgesterona(estudioEditar);
			 
		}
	});

	function edicionProgesterona(estudio) {
		cajaResultadoProgesteronaP.value = estudio.resultados[0].resultado;
	}

</script>