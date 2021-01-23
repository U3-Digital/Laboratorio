<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil Torch IgG e IgM");
?>
<div class="modal fade" id="perfiltorchiggeigm" tabindex="-1" role="dialog" aria-labelledby="perfiltorchiggeigm" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil Torch IgG e IgM</h5>
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
                                    <label for="cajaResultadoACIgG">AC IgG Toxoplasma gondii en suero:</label>
                                    <input class="form-control" type="text" name="cajaResultadoACIgG" id="cajaResultadoACIgG">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                Ui/ml
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <table class="table table-responsive">
                                    <tr>
                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                            Valores de referencia para toxoplasma IgG
                                        </th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Valor</td>
                                        <td style="text-align: center; padding: 5px 10px;">Interpretación</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&lt; 1.6 UI/ml</td>
                                        <td style="text-align: center; padding: 5px 10px;">No reactivo</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">1.6 - 2.9 UI/ml</td>
                                        <td style="text-align: center; padding: 5px 10px;">Indeterminado</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&gt;= 3.0 UI/ml</td>
                                        <td style="text-align: center; padding: 5px 10px;">Reactivo</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <hr style="background-color: #BBBBBB">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoACIgM">AC IgM Toxoplasma gondii en suero:</label>
                                    <input class="form-control" type="text" name="cajaResultadoACIgM" id="cajaResultadoACIgM">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                Ui/ml
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <table class="table table-responsive">
                                    <tr>
                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                            Valores de referencia para toxoplasma IgM
                                        </th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Valor</td>
                                        <td style="text-align: center; padding: 5px 10px;">Interpretación</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&lt; 0.5 UI/ml</td>
                                        <td style="text-align: center; padding: 5px 10px;">Índice no reactivo</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">0.5 - 0.59 UI/ml</td>
                                        <td style="text-align: center; padding: 5px 10px;">Índice indeterminado</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&gt;= 0.5 UI/ml</td>
                                        <td style="text-align: center; padding: 5px 10px;">Índice reactivo</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilTorch()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilTorch() {
		// if (cajaResultadoACIgG.value && cajaResultadoACIgM.value) {

			let estudio = {
				idmodal: 'perfiltorchiggeigm',
				nombre: 'Perfil Torch IgG e IgM',
				resultados:
				[{
					nombre: 'AC IgG Toxoplasma gondii en suero',
					resultado: cajaResultadoACIgG.value,
					limites: ['< 1.6 UI/ml - No reactivo', '1.6 - 2.9 UI/ml - Indeterminado', '>= 3.0 UI/ml Reactivo']
				},
                {
					nombre: 'AC IgM Toxoplasma gondii en suero',
					resultado: cajaResultadoACIgM.value,
					limites: ['< 0.5 UI/ml - Índice no reactivo', '0.5 - 0.59 UI/ml - Índice indeterminado', '>= 0.5 UI/ml Índice reactivo']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilTorch();
			limpiarPerfilTorch();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilTorch() {
		$(`#perfiltorchiggeigm`).modal('toggle');
	}

	function limpiarPerfilTorch() {
        cajaResultadoACIgG.value = '';
		cajaResultadoACIgM.value = '';
	}

	$('#perfiltorchiggeigm').on('hidden.bs.modal', function (e) {
  		limpiarPerfilTorch();
	});

	$('#perfiltorchiggeigm').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilTorch(estudioEditar);
			 
		}
	});

	function edicionPerfilTorch(estudio) {
        cajaResultadoACIgG.value = estudio.resultados[0].resultado;
		cajaResultadoACIgM.value = estudio.resultados[1].resultado;
	}

</script>