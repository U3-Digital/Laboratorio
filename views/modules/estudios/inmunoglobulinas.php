<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Inmunoglobulinas");
?>
<div class="modal fade" id="inmunoglobulinas" tabindex="-1" role="dialog" aria-labelledby="inmunoglobulinas" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Inmunoglobulinas</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
                    <div class="col-md-12">
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#lgE" role="tab" aria-controls="lgE" aria-selected="true">lgE</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lgA" role="tab" aria-controls="lgA" aria-selected="false">lgA</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lgG" role="tab" aria-controls="lgG" aria-selected="false">lgG</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lgM" role="tab" aria-controls="lgM" aria-selected="false">lgM</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="lgE" role="tabpanel" aria-labelledby="lgE-tab">1</div>
                        <div class="tab-pane fade" id="lgA" role="tabpanel" aria-labelledby="lgA-tab">2</div>
                        <div class="tab-pane fade" id="lgG" role="tabpanel" aria-labelledby="lgG-tab">3</div>
                        <div class="tab-pane fade" id="lgM" role="tabpanel" aria-labelledby="lgM-tab">4</div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarInmunoglobulinas()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarInmunoglobulinas() {
		if (cajaResultadoHCGBeta.value) {

			let estudio = {
				idmodal: 'inmunoglobulinas',
				nombre: 'Inmunoglobulinas',
				resultados:
				[{
					nombre: 'HCG',
					resultado: cajaResultadoHCGBeta.value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalInmunoglobulinas();
			limpiarInmunoglobulinas();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalInmunoglobulinas() {
		$(`#inmunoglobulinas`).modal('toggle');
	}

	function limpiarInmunoglobulinas() {

	}

	$('#inmunoglobulinas').on('hidden.bs.modal', function (e) {
        limpiarInmunoglobulinas();
	});

	$('#inmunoglobulinas').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionInmunoglobulinas(estudioEditar);
			console.log('hey crack', estudioEditar);
		}
	});

	function edicionInmunoglobulinas(estudio) {

	}

</script>