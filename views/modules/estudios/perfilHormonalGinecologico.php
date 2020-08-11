<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil hormonal ginecologico");
?>
<div class="modal fade" id="perfilhormonalginecologico" tabindex="-1" role="dialog" aria-labelledby="perfilhormonalginecologico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil hormonal ginecológico</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
                    <div class="col-md-12">
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="lge-tab" data-toggle="tab" href="#lgE" role="tab" aria-controls="lgE" aria-selected="true">lgE</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lga-tab" data-toggle="tab" href="#lgA" role="tab" aria-controls="lgA" aria-selected="false">lgA</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lgg-tab" data-toggle="tab" href="#lgG" role="tab" aria-controls="lgG" aria-selected="false">lgG</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lgm-tab" data-toggle="tab" href="#lgM" role="tab" aria-controls="lgM" aria-selected="false">lgM</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="lgE" role="tabpanel" aria-labelledby="lgE-tab">
							<div class="row">
                                
							</div>
						</div>
                        <div class="tab-pane fade" id="lgA" role="tabpanel" aria-labelledby="lgA-tab">
                            <div class="row">
                                    
                            </div>
						</div>
                        <div class="tab-pane fade" id="lgG" role="tabpanel" aria-labelledby="lgG-tab">
                            <div class="row">
                                    
                            </div>
						</div>
                        <div class="tab-pane fade" id="lgM" role="tabpanel" aria-labelledby="lgM-tab">
                            <div class="row">

                            </div>
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
		if (cajaResultadoLGE.value || cajaResultadoLGA.value || cajaResultadoLGG.value || cajaResultadoLGM.value) {

			let estudio = {
				idmodal: 'inmunoglobulinas',
				nombre: 'Inmunoglobulinas',
				resultados: [],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}

			if (cajaResultadoLGA.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina A',
					resultado: cajaResultadoLGA.value,
					limites: []
				});
			}

			if (cajaResultadoLGE.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina E',
					resultado: cajaResultadoLGE.value,
					limites: []
				});
			}

			if (cajaResultadoLGG.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina G',
					resultado: cajaResultadoLGG.value,
					limites: []
				});
			}

			if (cajaResultadoLGM.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina M',
					resultado: cajaResultadoLGM.value,
					limites: []
				});
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
        cajaResultadoLGE.value = "";
        cajaResultadoLGA.value = "";
        cajaResultadoLGG.value = "";
        cajaResultadoLGM.value = "";
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
        estudio.resultados.forEach(resultado => {
            switch (resultado.nombre) {
                case "Inmunoglobulina E":
                    cajaResultadoLGE.value = resultado.resultado;
                break;
                case "Inmunoglobulina A": 
                    cajaResultadoLGA.value = resultado.resultado;
                break;
                case "Inmunoglobulina G":
                    cajaResultadoLGG.value = resultado.resultado;
                break;
                case "Inmunoglobulina M":
                    cajaResultadoLGM.value = resultado.resultado;
                break;
                default:
                    return;
                break;
            }
        });
	}

</script>