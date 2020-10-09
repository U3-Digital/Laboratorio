<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil de hepatitis A");
?>
<div class="modal fade" id="perfildehepatitisa" tabindex="-1" role="dialog" aria-labelledby="perfildehepatitisa" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil de hepatitis A</h5>
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
                                    <label for="cajaResultadoPerfilHepatitisA">HVA (Virus hepatitis A):</label>
                                    <input class="form-control" type="text" id="cajaResultadoPerfilHepatitisA" name="cajaResultadoPerfilHepatitisA">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <table class="table table-responsive">
                                    <tr>
                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                            Valores de referencia para infección aguda/reciente
                                        </th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Valor</td>
                                        <td style="text-align: center; padding: 5px 10px;">Interpretación</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&lt; 0.40 UDS</td>
                                        <td style="text-align: center; padding: 5px 10px;">Negativo</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">0.41 - 0.50 UDS</td>
                                        <td style="text-align: center; padding: 5px 10px;">Dudoso</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">&gt;= 0.50 UDS</td>
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
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilDeHepatitisA()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilDeHepatitisA() {
		// if (cajaResultadoPerfilHepatitisA.value) {

			let estudio = {
				idmodal: 'perfildehepatitisa',
				nombre: 'Perfil de hepatitis A',
				resultados:
				[{
					nombre: 'HVA (Virus hepatitis A)',
					resultado: cajaResultadoPerfilHepatitisA.value,
					limites: ['< 0.40 UDS Negativo', '0.41 - 0.50 UDS Dudoso', '>= 0.50 UDS Positivo']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilDeHepatitisA();
			limpiarPerfilDeHepatitisA();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilDeHepatitisA() {
		$(`#perfildehepatitisa`).modal('toggle');
	}

	function limpiarPerfilDeHepatitisA() {
		cajaResultadoPerfilHepatitisA.value = '';
	}

	$('#perfildehepatitisa').on('hidden.bs.modal', function (e) {
        limpiarPerfilDeHepatitisA();
	});

	$('#perfildehepatitisa').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilHepatitisA(estudioEditar);
			 
		}
	});

	function edicionPerfilHepatitisA(estudio) {
		cajaResultadoPerfilHepatitisA.value = estudio.resultados[0].resultado;
	}

</script>