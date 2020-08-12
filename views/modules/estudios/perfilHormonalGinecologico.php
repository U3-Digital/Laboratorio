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
								<a class="nav-link active" id="estradiol-tab" data-toggle="tab" href="#estradiol" role="tab" aria-controls="estradiol" aria-selected="true">Estradiol</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="feyhl-tab" data-toggle="tab" href="#feyhl" role="tab" aria-controls="feyhl" aria-selected="false">Folículo estimulante y hormona luteinizante (LH)</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="progesteronaProlactina-tab" data-toggle="tab" href="#progesteronaProlactina" role="tab" aria-controls="progesteronaProlactina" aria-selected="false">Progesterona y prolactina</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="testosterona-tab" data-toggle="tab" href="#testosterona" role="tab" aria-controls="testosterona" aria-selected="false">Testosterona</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="estradiol" role="tabpanel" aria-labelledby="estradiol-tab">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="row mt-3">
											<div class="col-md-10 text-center">
												<div class="form-group">
													<label for="cajaResultadoEstradiol">Estradiol:</label>
													<input class="form-control" type="text" id="cajaResultadoEstradiol" name="cajaResultadoEstradiol">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>pg/ml</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="feyhl" role="tabpanel" aria-labelledby="feyhl-tab">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="row mt-3">
											<div class="col-md-10 text-center">
												<div class="form-group">
													<label for="cajaResultadoHormonaFoliculoEstimulante">Hormona folículo estimulante:</label>
													<input class="form-control" type="text" id="cajaResultadoHormonaFoliculoEstimulante" name="cajaResultadoHormonaFoliculoEstimulante">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>m Ul/ml</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="progesteronaProlactina" role="tabpanel" aria-labelledby="progesteronaProlactina-tab">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="row mt-3">
											<div class="col-md-10 text-center">
												<div class="form-group">
													<label for="cajaResultadoProgesterona">Progesterona:</label>
													<input class="form-control" type="text" id="cajaResultadoProgesterona" name="cajaResultadoProgesterona">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>pg/ml</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="testosterona" role="tabpanel" aria-labelledby="testosterona-tab">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="row mt-3">
											<div class="col-md-10 text-center">
												<div class="form-group">
													<label for="cajaResultadoEstradiol">Estradiol:</label>
													<input class="form-control" type="text" id="cajaResultadoEstradiol" name="cajaResultadoEstradiol">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>pg/ml</p>
											</div>
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
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilHormonalGinecologico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarPerfilHormonalGinecologico() {
		if (cajaResultadoLGE.value || cajaResultadoLGA.value || cajaResultadoLGG.value || cajaResultadoLGM.value) {

			let estudio = {
				idmodal: 'perfilhormonalginecologico',
				nombre: 'Perfil hormonal ginecológico',
				resultados: 
				[{
					nombre: 'estradiol',
					resultado: '',
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}

			agregarEstudio(estudio);
			cerrarModalPerfilHormonalGinecologico();
			limpiarPerfilHormonalGinecologico();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalPerfilHormonalGinecologico() {
		$(`#perfilhormonalginecologico`).modal('toggle');
	}

	function limpiarPerfilHormonalGinecologico() {
        
    }

	$('#perfilhormonalginecologico').on('hidden.bs.modal', function (e) {
        limpiarPerfilHormonalGinecologico();
	});

	$('#perfilhormonalginecologico').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilHormonalGinecologico(estudioEditar);
			console.log('hey crack', estudioEditar);
		}
	});

	function edicionPerfilHormonalGinecologico(estudio) {
        
	}

</script>