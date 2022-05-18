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
								<a class="nav-link" id="feyhl-tab" data-toggle="tab" href="#feyhl" role="tab" aria-controls="feyhl" aria-selected="false">Folículoestimulante y hormona luteinizante (LH)</a>
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
													<label for="cajaResultadoHormonaFoliculoestimulante">Hormona folículoestimulante:</label>
													<input class="form-control" type="text" id="cajaResultadoHormonaFoliculoestimulante" name="cajaResultadoHormonaFoliculoestimulante">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>m Ul/ml</p>
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
                                                        <td style="text-align: center; padding: 5px 10px;">Mujeres con menstruación normal:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Folicular</td>
                                                        <td style="text-align: center; padding: 5px 10px;">3.9 - 12.0 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Mitad del ciclo</td>
                                                        <td style="text-align: center; padding: 5px 10px;">2.9 - 9.0 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase lútea</td>
                                                        <td style="text-align: center; padding: 5px 10px;">1.5 - 7.0 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Embarazo</td>
                                                        <td style="text-align: center; padding: 5px 10px;">&lt;0.9 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Post embarazo</td>
                                                        <td style="text-align: center; padding: 5px 10px;"> &gt; 34 Ul/ml</td>
                                                    </tr>
												</table>
											</div>
										</div>
										<div class="row">
											<div class="col-md-10 text-center">
												<div class="form-group">
													<label for="cajaResultadoHormonaLuteinizante">Hormona luteinizante (LH):</label>
													<input class="form-control" type="text" id="cajaResultadoHormonaLuteinizante" name="cajaResultadoHormonaLuteinizante">
												</div>
											</div>
											<div class="col-md-2 align-self-center">
												<br>
												<p>m Ul/ml</p>
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
                                                        <td style="text-align: center; padding: 5px 10px;">Mujeres:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Folicular</td>
                                                        <td style="text-align: center; padding: 5px 10px;">1.5 - 8.0 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Mitad del ciclo</td>
                                                        <td style="text-align: center; padding: 5px 10px;">2.0 - 8.0 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase lútea</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0.2 - 6.5 Ul/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Post-menopausia</td>
                                                        <td style="text-align: center; padding: 5px 10px;">16.0 - 33.0 Ul/ml</td>
													</tr>
												</table>
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
                                        <div class="row justify-content-center">
											<div class="col-md-8">
												<table>
													<tr>
                                                        <th colspan="2" style="text-align: center; padding: 5px 10px;">
                                                            Valores normales
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Mujeres con menstruación normal:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Folicular</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0.25 - 0.54 ng/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase lútea</td>
                                                        <td style="text-align: center; padding: 5px 10px;">1.5 - 20.0 ng/ml</td>
													</tr>
													<tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Menopausia</td>
                                                        <td style="text-align: center; padding: 5px 10px;">&lt; 0.41 ng/ml</td>
													</tr>
												</table>
											</div>
                                        </div>
                                        <div class="row">
											<div class="col-md-10 text-center">
												<div class="form-group">
													<label for="cajaResultadoProlactina">Prolactina:</label>
													<input class="form-control" type="text" id="cajaResultadoProlactina" name="cajaResultadoProlactina">
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
                                                        <td style="text-align: center; padding: 5px 10px;">Mujeres con menstruación normal:</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Fase Folicular</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0.25 - 0.54 ng/ml</td>
													</tr>
													<tr>
                                                    <td style="text-align: center; padding: 5px 10px;">Fase lútea</td>
                                                        <td style="text-align: center; padding: 5px 10px;">1.5 - 20.0 ng/ml</td>
													</tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Ovulación</td>
                                                        <td style="text-align: center; padding: 5px 10px;">0.25 - 6.22 ng/ml</td>
													</tr>
                                                    <tr>
                                                        <td style="text-align: center; padding: 5px 10px;">Menopausia</td>
                                                        <td style="text-align: center; padding: 5px 10px;">&lt; 0.41 ng/ml</td>
													</tr>
												</table>
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
                                                <table>
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
		/* if (cajaResultadoEstradiol.value && cajaResultadoHormonaFoliculoestimulante.value && 
            cajaResultadoHormonaLuteinizante.value && cajaResultadoProgesterona.value && 
            cajaResultadoProlactina.value && cajaResultadoTestosteronaTotal.value) { */

			let estudio = {
				idmodal: 'perfilhormonalginecologico',
				nombre: 'Perfil hormonal ginecológico',
				resultados: 
				[{
					nombre: 'Estradiol',
					resultado: cajaResultadoEstradiol.value,
					limites: ['Fase Folicular - 18 - 147 pg/ml', 'Fase Preovulatoria - 93 - 575 pg/ml', 'Fase Lútea - 43 - 214 pg/ml', 'Durante la gestación:', '9 sem a 12 sem - 1,122 - 2,200 pg/ml', '13 sem a 14 sem 1,800 - 4,500 pg/ml', '17 sem a 20 sem 5,300 - 11,500 pg/ml', '21 sem a 24 sem 7,000 - 14,200 pg/ml', '25 sem a 28 sem 8,200 - 19,900 pg/ml', '29 sem a 32 sem 9,000 - 23,000 pg/ml', '33 sem a 36 sem 11,000 - 23,500 pg/ml', '37 sem a 38 sem 16,000 - 26,700 pg/ml', '39 sem a 40 sem 16,000 - 26,700 pg/ml', 'Post menopausia sin tratamiento 0 - 30 pg/ml,', 'Post menopausia con tratamiento 0 - 58 pg/ml', 'Con anticonceptivos orales 0 - 102 pg/ml']
				},
                {
					nombre: 'Hormona Foliculo-estimulante',
					resultado: cajaResultadoHormonaFoliculoestimulante.value,
					limites: ['Fase Folicular 3.9 - 12.0 Ul/ml', 'Mitad del ciclo 2.9 - 9.0 Ul/ml', 'Fase lútea 1.5 - 7.0 Ul/ml', 'Embarazo < 0.9 Ul/ml', 'Post embarazo > 34 Ul/ml']
				},
                {
					nombre: 'Hormona luteinizante',
					resultado: cajaResultadoHormonaLuteinizante.value,
					limites: ['Fase Folicular 1.5 - 8.0 Ul/ml', 'Mitad del ciclo 2.0 - 8.0 Ul/ml', 'Fase lútea 0.2 - 6.5 Ul/ml', 'Post-menopausia 16.0 - 33.0 Ul/ml']
				},
                {
					nombre: 'Progresterona',
					resultado: cajaResultadoProgesterona.value,
					limites: ['Fase Folicular 0.25 - 0.54 ng/ml', 'Fase lútea 1.5 - 20.0 ng/ml', 'Menopausia < 0.41 ng/ml']
				},
                {
					nombre: 'Prolactina',
					resultado: cajaResultadoProlactina.value,
					limites: ['Fase Folicular 0.25 - 0.54 ng/ml', 'Fase lútea 1.5 - 20.0 ng/ml', 'Ovulación 0.25 - 6.22 ng/ml', 'Menopausia < 0.41 ng/ml']
				},
                {
					nombre: 'Testosterona total',
					resultado: cajaResultadoTestosteronaTotal.value,
					limites: ['Mujeres 0.1 - 0.9 ng/ml', 'Hombres 3.0 - 10.0 ng/ml']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}

			agregarEstudio(estudio);
			cerrarModalPerfilHormonalGinecologico();
			limpiarPerfilHormonalGinecologico();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilHormonalGinecologico() {
		$(`#perfilhormonalginecologico`).modal('toggle');
	}

	function limpiarPerfilHormonalGinecologico() {
        cajaResultadoEstradiol.valule = '';
        cajaResultadoHormonaFoliculoestimulante.value = '';
        cajaResultadoHormonaLuteinizante.value = '';
        cajaResultadoProgesterona.value = '';
        cajaResultadoProlactina.value = '';
        cajaResultadoTestosteronaTotal.value = '';
    }

	$('#perfilhormonalginecologico').on('hidden.bs.modal', function (e) {
        limpiarPerfilHormonalGinecologico();
	});

	$('#perfilhormonalginecologico').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilHormonalGinecologico(estudioEditar);
			 
		}
	});

	function edicionPerfilHormonalGinecologico(estudio) {
        cajaResultadoEstradiol.value = estudio.resultados[0].resultado;
        cajaResultadoHormonaFoliculoestimulante.value = estudio.resultados[1].resultado;
        cajaResultadoHormonaLuteinizante.value = estudio.resultados[2].resultado;
        cajaResultadoProgesterona.value = estudio.resultados[3].resultado;
        cajaResultadoProlactina.value = estudio.resultados[4].resultado;
        cajaResultadoTestosteronaTotal.value = estudio.resultados[5].resultado;
	}

</script>