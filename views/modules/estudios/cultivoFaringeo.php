<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Cultivo faringeo");
?>
<div class="modal fade" id="cultivofaringeo" tabindex="-1" role="dialog" aria-labelledby="cultivofaringeo" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Cultivo faríngeo</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row text-center">
		        	
					<div class="col-md-8 mx-auto">
						<div class="list-group">
							<div class="list-group-item list-group-item-action disabled">
		                        <div class="row">
		                            <div class="col-6 align-self-center">
		                             	Antibiótico
		                            </div>
		                            <div class="col-3 align-self-center">
		                            	Sensible
		                            </div>
		                            <div class="col-3 align-self-center">
		                                Resistente
		                            </div>
		                        </div>
                      		</div>
                      		<div class="list-group-item list-group-item-action">
		                        <div class="row">
		                            <div class="col-6 align-self-center">
		                             	(AM) Ampicilina
		                            </div>
		                            <div class="col-3 align-self-center">
		                            	<div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioAmpicilinaSensible" name="ampicilina" value="sensible">
										</div>
		                            </div>
		                            <div class="col-3 align-self-center">
		                                <div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioAmpicilinaResistente" name="ampicilina" value="resistente">
										</div>
		                            </div>
		                        </div>
                      		</div>
                      		<div class="list-group-item list-group-item-action">
		                        <div class="row">
		                            <div class="col-6 align-self-center">
		                             	(CF) Cefalotina
		                            </div>
		                            <div class="col-3 align-self-center">
		                            	<div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCefalotinaSensible" name="cefalotina" value="sensible">
										</div>
		                            </div>
		                            <div class="col-3 align-self-center">
		                                <div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCefalotinaResistente" name="cefalotina" value="resistente">
										</div>
		                            </div>
		                        </div>
                      		</div>
                      		<div class="list-group-item list-group-item-action">
		                        <div class="row">
		                            <div class="col-6 align-self-center">
		                             	(CTX) Cefotaxima
		                            </div>
		                            <div class="col-3 align-self-center">
		                            	<div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCefotaximaSensible" name="cefotaxima" value="sensible">
										</div>
		                            </div>
		                            <div class="col-3 align-self-center">
		                                <div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCefotaximaResistente" name="cefotaxima" value="resistente">
										</div>
		                            </div>
		                        </div>
                      		</div>
                      		<div class="list-group-item list-group-item-action">
		                        <div class="row">
		                            <div class="col-6 align-self-center">
		                             	(CAZ) Ceftazidima
		                            </div>
		                            <div class="col-3 align-self-center">
		                            	<div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCeftazidimaSensible" name="ceftazidima" value="sensible">
										</div>
		                            </div>
		                            <div class="col-3 align-self-center">
		                                <div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCeftazidimaResistente" name="ceftazidima" value="resistente">
										</div>
		                            </div>
		                        </div>
                      		</div>
                      		<div class="list-group-item list-group-item-action">
		                        <div class="row">
		                            <div class="col-6 align-self-center">
		                             	(CXM) Cefuroxima
		                            </div>
		                            <div class="col-3 align-self-center">
		                            	<div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCefuroximaSensible" name="cefuroxima" value="sensible">
										</div>
		                            </div>
		                            <div class="col-3 align-self-center">
		                                <div class="form-check">
										  <input class="form-check-input position-static" type="radio" id="radioCefuroximaResistente" name="cefuroxima" value="resistente">
										</div>
		                            </div>
		                        </div>
                      		</div>
						</div>
					</div>

		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCultivoFaringeo()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarCultivoFaringeo() {
		if (cajaResultadoAmilasa.value) {

			let estudio = {
				idmodal: 'cultivofaringeo',
				nombre: 'Amilasa',
				resultados: 
				[{
					nombre: 'Amilasa',
					resultado: cajaResultadoAmilasa.value,
					limites: ['87-123']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarCultivoFaringeo();
			limpiarCultivoFaringeo();
			
		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarCultivoFaringeo() {
		$(`#cultivofaringeo`).modal('toggle');
	}

	function limpiarCultivoFaringeo() {
		
	}

	$('#cultivofaringeo').on('hidden.bs.modal', function (e) {
  		limpiarCultivoFaringeo();
	});

</script>