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
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <table>
                                                    <tr>
                                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                                            Valores normales
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Ciclo menstrual:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Folicular</td>
                                                        <td style="text-align: center; padding: 5px 10px;">18 - 147 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Preovulatoria</td>
                                                        <td style="text-align: center; padding: 5px 10px;">93 - 575 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Lútea</td>
                                                        <td style="text-align: center; padding: 5px 10px;">43 - 214 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Durante la gestación:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">&emsp;Semanas:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">9 sem a 12 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">1,122 - 2,200 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">13 sem a 14 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">1,800 - 4,500 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">17 sem a 20 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">5,300 - 11,500 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">21 sem a 24 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">7,000 - 14,200 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">25 sem a 28 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">8,200 - 19,900 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">29 sem a 32 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">9,000 - 23,000 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">33 sem a 36 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">11,000 - 23,500 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">37 sem a 38 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">16,000 - 26,700 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">39 sem a 40 sem</td>
                                                        <td style="text-align: center; padding: 5px 10px;">16,000 - 26,700 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Post menopausia sin tratamiento</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0 - 30 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Post menopausia con tratamiento</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0 - 58 pg/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Con anticonceptivos orales</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0 - 102 pg/ml</td>
                                                    </tr>
                                                </table>
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
													<label for="cajaResultadoTestosteronaTotal">Testosterona total:</label>
													<input class="form-control" type="text" id="cajaResultadoTestosteronaTotal" name="cajaResultadoTestosteronaTotal">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>ng/ml</p>
											</div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <table class="borde">
                                                    <tr>
                                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                                            Valores normales
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Mujeres</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0.1 - 0.9 ng/ml</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Hombres</td>
                                                        <td style="text-align: center; padding: 5px 10px;">3.0 - 10.0 ng/ml</td>
                                                    </tr>
                                                    
                                                </table>
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