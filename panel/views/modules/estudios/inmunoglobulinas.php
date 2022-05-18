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
						<ul class="nav nav-tabs nav-fill" id="imunoglobulinas" role="tablist">
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
                    <div class="tab-content" id="imunoglobulinasContent">
                        <div class="tab-pane fade show active" id="lgE" role="tabpanel" aria-labelledby="lgE-tab">
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-6 mt-3">
											<div class="form-group">
												<label for="cajaResultadoLGE">Inmunoglobulina E (lgE):</label>
												<input class="form-control" type="text" id="cajaResultadoLGE" name="cajaResultadoLGE">
											</div>
										</div>
										<div class="col-md-2 align-self-center">
											<br>
											Ul/ml
										</div>
										<div class="col-md-2"></div>
									</div>
									<div class="row justify-content-center">
										<div class="col-md-4 text-center">
											<table>
												<tr>
													<th colspan=2 style="text-align:center;padding:5px 10px;">
														Valores normales
													</th>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">0 - 10 meses</td>
													<td style="text-align:center;padding:5px 10px;">0 - 6.6 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">1 - 3 años</td>
													<td style="text-align:center;padding:5px 10px;">0.1 - 15.8 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">4 - 6 años</td>
													<td style="text-align:center;padding:5px 10px;">0.3 - 17.6 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">7 - 9 años</td>
													<td style="text-align:center;padding:5px 10px;">0.3 - 60.1 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">10 - 11 años</td>
													<td style="text-align:center;padding:5px 10px;">8.0 - 95.0 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">12 - 13 años</td>
													<td style="text-align:center;padding:5px 10px;">3.9 - 83.5 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">14 - 15 años</td>
													<td style="text-align:center;padding:5px 10px;">3.3 - 188.0 Ul/ml</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">16 - 19 años</td>
													<td style="text-align:center;padding:5px 10px;">1.7 - 305.9 Ul/ml</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane fade" id="lgA" role="tabpanel" aria-labelledby="lgA-tab">
						    <div class="row">
								<div class="col-md-12 text-center">
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-6 mt-3">
											<div class="form-group">
												<label for="cajaResultadoLGA">Inmunoglobulina A (lgA):</label>
												<input class="form-control" type="text" id="cajaResultadoLGA" name="cajaResultadoLGA">
											</div>
										</div>
										<div class="col-md-2 align-self-center">
											<br>
											Ul/ml
										</div>
										<div class="col-md-2"></div>
									</div>
									<div class="row justify-content-center">
										<div class="col-md-4 text-center">
											<table>
												<tr>
													<th colspan=2 style="text-align:center;padding:5px 10px;">
														Valores normales
													</th>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">0 - 10 meses</td>
													<td style="text-align:center;padding:5px 10px;">0 - 100 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">1 - 3 años</td>
													<td style="text-align:center;padding:5px 10px;">24 - 192 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">4 - 6 años</td>
													<td style="text-align:center;padding:5px 10px;">26 - 232 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">7 - 9 años</td>
													<td style="text-align:center;padding:5px 10px;">33 - 258 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">10 - 11 años</td>
													<td style="text-align:center;padding:5px 10px;">45 - 285 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">12 - 13 años</td>
													<td style="text-align:center;padding:5px 10px;">45 - 285 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">14 - 15 años</td>
													<td style="text-align:center;padding:5px 10px;">47 - 314 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">16 - 19 años</td>
													<td style="text-align:center;padding:5px 10px;">55 - 357 mg/dl</td>
												</tr>
												<tr>
													<td style="text-align:center;padding:5px 10px;">Adultos</td>
													<td style="text-align:center;padding:5px 10px;">60 - 400 mg/dl</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane fade" id="lgG" role="tabpanel" aria-labelledby="lgG-tab">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="cajaResultadoLGG">Inmunoglobulina G (lgG):</label>
                                                <input class="form-control" type="text" id="cajaResultadoLGG" name="cajaResultadoLGG">
                                            </div>
                                        </div>
                                        <div class="col-md-2 align-self-center">
                                            <br>
                                            Ul/ml
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 text-center">
                                            <table>
                                                <tr>
                                                    <th colspan=2 style="text-align:center;padding:5px 10px;">
                                                        Valores normales
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">0 - 10 meses</td>
                                                    <td style="text-align:center;padding:5px 10px;">273 - 1660 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">1 - 3 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">400 - 1250 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">4 - 6 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">560 - 1307 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">7 - 9 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">598 - 1399 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">10 - 11 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">638 - 1453 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">12 - 13 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">680 - 1531 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">14 - 15 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">724 - 1611 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">16 - 19 años</td>
                                                    <td style="text-align:center;padding:5px 10px;">700 - 1500 mg/dl</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;padding:5px 10px;">Adultos</td>
                                                    <td style="text-align:center;padding:5px 10px;">700 - 1500 mg/dl</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
                        <div class="tab-pane fade" id="lgM" role="tabpanel" aria-labelledby="lgM-tab">
                            <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-6 mt-3">
                                                <div class="form-group">
                                                    <label for="cajaResultadoLGM">Inmunoglobulina M (lgM):</label>
                                                    <input class="form-control" type="text" id="cajaResultadoLGM" name="cajaResultadoLGM">
                                                </div>
                                            </div>
                                            <div class="col-md-2 align-self-center">
                                                <br>
                                                Ul/ml
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 text-center">
                                                <table>
                                                    <tr>
                                                        <th colspan=2 style="text-align:center;padding:5px 10px;">
                                                            Valores normales
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">0 - 12 meses</td>
                                                        <td style="text-align:center;padding:5px 10px;">0 - 216 md/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">1 - 3 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">28 - 218 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">4 - 6 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">36 - 314 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">7 - 9 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">47 - 311 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">10 - 11 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">46 - 268 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">12 - 13 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">52 - 357 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">14 - 15 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">23 - 281 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">16 - 19 años</td>
                                                        <td style="text-align:center;padding:5px 10px;">35 - 387 mg/dl</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;padding:5px 10px;">Adultos</td>
                                                        <td style="text-align:center;padding:5px 10px;">60 - 300 mg/dl</td>
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
	        	<button type="button" class="btn btn-primary" onclick="validarInmunoglobulinas()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarInmunoglobulinas() {
		// if (cajaResultadoLGE.value || cajaResultadoLGA.value || cajaResultadoLGG.value || cajaResultadoLGM.value) {

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
					limites: ['0 - 10 meses    0 - 100 mg/dl', '1 - 3 años    24 - 192 mg/dl', '4 - 6 años    26 - 232 mg/dl', '7 - 9 años    33 - 258 mg/dl', '10 - 11 años    45 - 285 mg/dl', '12 - 13 años    45 - 285 mg/dl', '14 - 15 años    47 - 314 mg/dl', '16 - 19 años    55 - 357 mg/dl', 'Adultos    60 - 400 mg/dl']
				});
			}

			if (cajaResultadoLGE.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina E',
					resultado: cajaResultadoLGE.value,
					limites: ['0 - 10 meses    0 - 6.6 Ul/ml', '1 - 3 años    0.1 - 15.8 Ul/ml', '4 - 6 años    0.3 - 17.6 Ul/ml', '7 - 9 años    0.3 - 60.1 Ul/ml', '10 - 11 años    8.0 - 95.0 Ul/ml', '12 - 13 años    3.9 - 83.5 Ul/ml', '14 - 15 años    3.3 - 188.0 Ul/ml', '16 - 19 años    1.7 - 305.9 Ul/ml', 'Adultos    60 - 400 mg/dl']
				});
			}

			if (cajaResultadoLGG.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina G',
					resultado: cajaResultadoLGG.value,
					limites: ['0 - 10 meses    273 - 1660 mg/dl', '1 - 3 años    400 - 1250 mg/dl', '4 - 6 años    560 - 1307 mg/dl', '7 - 9 años    598 - 1399 mg/dl', '10 - 11 años    638 - 1453 mg/dl', '12 - 13 años    680 - 1531 mg/dl', '14 - 15 años    724 - 1611 mg/dl', '16 - 19 años    700 - 1500 mg/dl', 'Adultos    700 - 1500 mg/dl']
				});
			}

			if (cajaResultadoLGM.value) {
				estudio.resultados.push({
					nombre: 'Inmunoglobulina M',
					resultado: cajaResultadoLGM.value,
					limites: ['0 - 12 meses    0 - 216 md/dl', '1 - 3 años    28 - 218 mg/dl', '4 - 6 años    36 - 314 mg/dl', '7 - 9 años    47 - 311 mg/dl', '10 - 11 años    46 - 268 mg/dl', '12 - 13 años    52 - 357 mg/dl', '14 - 15 años	23 - 281 mg/dl', '16 - 19 años    35 - 387 mg/dl', 'Adultos    60 - 300 mg/dl']
				});
			}

			agregarEstudio(estudio);
			cerrarModalInmunoglobulinas();
			limpiarInmunoglobulinas();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
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