<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Tamiz hemoglobinopatia neonatal");
?>

<style>

</style>

<div class="modal fade" id="tamizhemoglobinopatianeonatal" tabindex="-1" role="dialog" aria-labelledby="tamizhemoglobinopatianeonatal" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Hemoglobinopatia neonatal</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
						
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarTamiz()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarTamiz() {
		if (cajaResultadoProgesteronaP.value) {

			let estudio = {
				idmodal: 'progesterona',
				nombre: 'Amiba en fresco',
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
			cerrarModalTamiz();
			limpiarTamiz();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalTamiz() {
		$(`#tamizhemoglobinopatianeonatal`).modal('toggle');
	}

	function limpiarTamiz() {
		
	}

	$('#tamizhemoglobinopatianeonatal').on('hidden.bs.modal', function (e) {
  		limpiarAmibaEnFresco();
	});

	$('#tamizhemoglobinopatianeonatal').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionTamiz(estudioEditar);
			 
		}
	});

	function edicionTamiz(estudio) {
	}

</script>