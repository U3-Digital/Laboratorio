<?php
    $controller = new Controller();
    $respuesta = $controller -> ctlBuscarEstudio("Pruebas de funcionamiento hepatico");
?>
<div class="modal fade" id="proteinacreactiva" tabindex="-1" role="dialog" aria-labelledby="proteinacreactiva" aria-hidden="true">
    <div class="modal-dialog custom-modal  modal-dialog-scrollable">
        <div class="modal-content custom-modal">
            <div class="modal-header custom-modal">
                <h5 class="modal-title" id="modal">Proteína C reactiva</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <form id="formaProteinaC">
                            <div class="form-group">
                                <label>Proteína C reactiva</label>
                                <div class="col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input position-static" type="radio" id="radioProteinaCPositivo" name="proteinaC" value="Positivo">
                                        <label class="form-check-label" for="radioProteinaCPositivo">&nbsp;Positivo</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input position-static" type="radio" id="radioProteinaCNegativo" name="proteinaC" value="Negativo">
                                        <label class="form-check-label" for="radioProteinaCNegativo">&nbsp;Negativo</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6">
                        <input class="form-control" id="cajaComentarioProteinaC" name="cajaComentarioProteinaC" type="text">
                    </div>
                </div>
            </div>
            <div class="modal-footer custom-modal">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="validarProteinaCReactiva()">Agregar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function validarProteinaCReactiva() {
        const formaProteinaC = document.getElementById('formaProteinaC');

		// if (formaProteinaC.elements["proteinaC"].value) {

			let estudio = {
				idmodal: 'proteinacreactiva',
				nombre: 'Proteína C reactiva',
				resultados:
				[{
					nombre: 'Proteína C reactiva',
					resultado: formaProteinaC.elements["proteinaC"].value,
					limites: []
				}],
				observaciones: cajaComentarioProteinaC.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalProteinaCReactiva();
			limpiarProteinaCReactiva();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

    function cerrarModalProteinaCReactiva() {
		$(`#proteinacreactiva`).modal('toggle');
	}

	function limpiarProteinaCReactiva() {
        cajaComentarioProteinaC.value = '';

        document.getElementsByName('proteinaC')[0].checked = false;
        document.getElementsByName('proteinaC')[1].checked = false;
	}

	$('#proteinacreactiva').on('hidden.bs.modal', function (e) {
        limpiarProteinaCReactiva();
	});

	$('#proteinacreactiva').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionProteinaCReactiva(estudioEditar);
		}
	});

	function edicionProteinaCReactiva(estudio) {
		if (estudio.resultados[0].resultado === "Positivo") {
            document.getElementsByName('proteinaC')[0].checked = true;
        } else {
            document.getElementsByName('proteinaC')[1].checked = true;
        }

        cajaComentarioProteinaC.value = estudio.observaciones;
	}

</script>