<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil de hepatitis A");
?>
<div class="modal fade" id="perfildehepatitisc" tabindex="-1" role="dialog" aria-labelledby="perfildehepatitisc" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil de hepatitis C</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row justify-content-center">
		        	<div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <div class="form-group">
                                    <label for="cajaResultadoPerfilHepatitisC">AC's Anti-virus de hepatitis C:</label>
                                    <input class="form-control" type="text" id="cajaResultadoPerfilHepatitisC" name="cajaResultadoPerfilHepatitisC">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <table class="table table-responsive">
                                    <tr>
                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                            Valores de referencia para anticuerpos contra el virus de hepatitis C (HCV)
                                        </th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Valor</td>
                                        <td style="text-align: center; padding: 5px 10px;">Interpretación</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">0.0 - 0.89 UDS</td>
                                        <td style="text-align: center; padding: 5px 10px;">Negativo</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">0.90 - 0.99 UDS</td>
                                        <td style="text-align: center; padding: 5px 10px;">Dudoso</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&gt; 0.99 UDS</td>
                                        <td style="text-align: center; padding: 5px 10px;">Positivo</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <small><p>UDS = Unidades de Diagnóstico Estándar</p></small>
                                <small><p>*Método de medición: SWA-ROCHE - Quimioluminiscencia</p></small>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilDeHepatitisC()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilDeHepatitisC() {
		// if (cajaResultadoPerfilHepatitisC.value) {

			let estudio = {
				idmodal: 'perfildehepatitisc',
				nombre: 'Perfil de hepatitis C',
				resultados:
				[{
					nombre: 'AC\'s anti-virus de hepatitis C',
					resultado: cajaResultadoPerfilHepatitisC.value,
					limites: ['0.0 - 0.89 UDS Negativo', '0.90 - 0.99 UDS Dudoso', '> 0.99 UDS Positivo']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilDeHepatitisC();
			limpiarPerfilDeHepatitisC();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilDeHepatitisC() {
		$(`#perfildehepatitisc`).modal('toggle');
	}

	function limpiarPerfilDeHepatitisC() {
		cajaResultadoPerfilHepatitisC.value = '';
	}

	$('#perfildehepatitisc').on('hidden.bs.modal', function (e) {
        limpiarPerfilDeHepatitisC();
	});

	$('#perfildehepatitisc').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilHepatitisC(estudioEditar);
			 
		}
	});

	function edicionPerfilHepatitisC(estudio) {
		cajaResultadoPerfilHepatitisC.value = estudio.resultados[0].resultado;
	}

</script>