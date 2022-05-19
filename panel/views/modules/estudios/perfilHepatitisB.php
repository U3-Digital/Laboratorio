<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil de hepatitis B");
?>
<div class="modal fade" id="perfildehepatitisb" tabindex="-1" role="dialog" aria-labelledby="perfildehepatitisb" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil de hepatitis B</h5>
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
                                    <label for="cajaResultadoPerfilHepatitisB">AC'S Virus superficie B (HBs): </label>
                                    <input class="form-control" type="text" id="cajaResultadoPerfilHepatitisB" name="cajaResultadoPerfilHepatitisB">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <table class="table table-responsive">
                                    <tr>
                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                            Valores de referencia
                                        </th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">Valor</td>
                                        <td style="text-align: center; padding: 5px 10px;">Interpretación</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; padding: 5px 10px;">2 - 19 UI/l</td>
                                        <td style="text-align: center; padding: 5px 10px;">Negativo</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <small><p>UI/l = Unidades internacionales por litro</p></small>
                                <small><p>*Método de medición: SWA-ROCHE - Quimioluminiscencia</p></small>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilDeHepatitisB()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilDeHepatitisB() {
		// if (cajaResultadoPerfilHepatitisB.value) {

			let estudio = {
				idmodal: 'perfildehepatitisb',
				nombre: 'Perfil de hepatitis B',
				resultados:
				[{
					nombre: 'AC\'S Virus superficie B (HBs)',
					resultado: cajaResultadoPerfilHepatitisB.value,
					limites: ['2 - 19 UI/l Negativo']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilDeHepatitisB();
			limpiarPerfilDeHepatitisB();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilDeHepatitisB() {
		$(`#perfildehepatitisb`).modal('toggle');
	}

	function limpiarPerfilDeHepatitisB() {
		cajaResultadoPerfilHepatitisB.value = '';
	}

	$('#perfildehepatitisb').on('hidden.bs.modal', function (e) {
        limpiarPerfilDeHepatitisB();
	});

	$('#perfildehepatitisb').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilHepatitisB(estudioEditar);
			 
		}
	});

	function edicionPerfilHepatitisB(estudio) {
		cajaResultadoPerfilHepatitisB.value = estudio.resultados[0].resultado;
	}

</script>