<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Pruebas de funcionamiento hepatico");
?>
<div class="modal fade" id="pruebasdefuncionamientohepatico" tabindex="-1" role="dialog" aria-labelledby="preubasdefuncionamientohepatico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Pruebas de funcionamiento hepático</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row justify-content-center">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTGOFuncionamientoH">TGO:</label>
                                    <input class="form-control" type="text" id="cajaResultadoTGOFuncionamientoH" name="cajaResultadoTGOFuncionamientoH">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <p>Límites de referencia</p>
                                <p>Hasta 40 u/l</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoTGPFuncionamientoH">TGP:</label>
                                    <input class="form-control" type="text" id="cajaResultadoTGPFuncionamientoH" name="cajaResultadoTGPFuncionamientoH">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Hasta 40 u/l</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoProteinasTotalesFuncionamientoH">Proteínas totales:</label>
                                    <input class="form-control" type="text" id="cajaResultadoProteinasTotalesFuncionamientoH" name="cajaResultadoProteinasTotalesFuncionamientoH">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>7.5</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoAlbumina">Albumina:</label>
                                    <input class="form-control" type="text" id="cajaResultadoAlbumina" name="cajaResultadoAlbumina">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>4.5</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoGlobulinaFuncionamientoH">Globulina:</label>
                                    <input class="form-control" type="text" id="cajaResultadoGlobulinaFuncionamientoH" name="cajaResultadoGlobulinaFuncionamientoH">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoGlobulinaRelacionAG">Relación A/G:</label>
                                    <input class="form-control" type="text" id="cajaResultadoGlobulinaRelacionAG" name="cajaResultadoGlobulinaRelacionAG">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoBilirrubinaTotal">Bilirrubina total:</label>
                                    <input class="form-control" type="text" id="cajaResultadoBilirrubinaTotal" name="cajaResultadoBilirrubinaTotal">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Hasta 1.5 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoBilirrubinaDirecta">Bilirrubina directa:</label>
                                    <input class="form-control" type="text" id="cajaResultadoBilirrubinaDirecta" name="cajaResultadoBilirrubinaDirecta">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Hasta 0.25 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoBilirrubinaIndirecta">Bilirrubina indirecta:</label>
                                    <input class="form-control" type="text" id="cajaResultadoBilirrubinaIndirecta" name="cajaResultadoBilirrubinaIndirecta">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Hasta 1.5 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoFosfatasaAlcalina">Fosfatasa alcalina:</label>
                                    <input class="form-control" type="text" id="cajaResultadoFosfatasaAlcalina" name="cajaResultadoFosfatasaAlcalina">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>Hasta 180</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cajaResultadoLDH">LDH:</label>
                                    <input class="form-control" type="text" id="cajaResultadoLDH" name="cajaResultadoLDH">
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <br>
                                <p>180 - 333 u/l</p>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarFuncionamientoHepatico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarFuncionamientoHepatico() {
        if (cajaResultadoTGOFuncionamientoH.value && cajaResultadoTGPFuncionamientoH.value && 
            cajaResultadoProteinasTotalesFuncionamientoH.value && cajaResultadoAlbumina.value && 
            cajaResultadoGlobulinaFuncionamientoH.value && cajaResultadoGlobulinaRelacionAG.value &&
            cajaResultadoBilirrubinaTotal.value && cajaResultadoBilirrubinaDirecta.value &&
            cajaResultadoBilirrubinaIndirecta.value && cajaResultadoFosfatasaAlcalina.value &&
            cajaResultadoLDH.value) {

			let estudio = {
				idmodal: 'pruebasdefuncionamientohepatico',
				nombre: 'Pruebas de funcionamiento hepático',
				resultados:
				[{
					nombre: 'TGO',
					resultado: cajaResultadoTGOFuncionamientoH.value,
					limites: ['Hasta 40 u/l']
                },
                {
					nombre: 'TGP',
					resultado: cajaResultadoTGPFuncionamientoH.value,
					limites: ['Hasta 40 u/l']
                },
                {
					nombre: 'Proteínas totales',
					resultado: cajaResultadoProteinasTotalesFuncionamientoH.value,
					limites: ['7.5']
                },
                {
					nombre: 'Albumina',
					resultado: cajaResultadoAlbumina.value,
					limites: ['4.5']
                },
                {
					nombre: 'Globulina',
					resultado: cajaResultadoGlobulinaFuncionamientoH.value,
					limites: []
                },
                {
					nombre: 'Relación A/G',
					resultado: cajaResultadoGlobulinaRelacionAG.value,
					limites: []
                },
                {
					nombre: 'Bilirrubina total',
					resultado: cajaResultadoBilirrubinaTotal.value,
					limites: ['Hasta 1.5 mg/dl']
                },
                {
					nombre: 'Bilirrubina directa',
					resultado: cajaResultadoBilirrubinaDirecta.value,
					limites: ['Hasta 0.25 mg/dl']
                },
                {
					nombre: 'Bilirrubina indirecta',
					resultado: cajaResultadoBilirrubinaIndirecta.value,
					limites: ['Hasta 1.5 mg/dl']
                },
                {
					nombre: 'Fosfatasa alcalina',
					resultado: cajaResultadoFosfatasaAlcalina.value,
					limites: ['Hasta 1.5 mg/dl']
                },
                {
					nombre: 'LDH',
					resultado: cajaResultadoLDH.value,
					limites: ['180 - 333 u/l']
                }],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalFuncionamientoHepatico();
			limpiarFuncionamientoHepatico();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalFuncionamientoHepatico() {
		$(`#pruebasdefuncionamientohepatico`).modal('toggle');
	}

	function limpiarFuncionamientoHepatico() {
        cajaResultadoTGOFuncionamientoH.value = '';
        cajaResultadoTGPFuncionamientoH.value = '';
        cajaResultadoProteinasTotalesFuncionamientoH.value = '';
        cajaResultadoAlbumina.value = '';
        cajaResultadoGlobulinaFuncionamientoH.value = '';
        cajaResultadoGlobulinaRelacionAG.value = '';
        cajaResultadoBilirrubinaTotal.value = '';
        cajaResultadoBilirrubinaDirecta.value = '';
        cajaResultadoBilirrubinaIndirecta.value = '';
        cajaResultadoFosfatasaAlcalina.value = '';
        cajaResultadoLDH.value = '';
	}

	$('#pruebasdefuncionamientohepatico').on('hidden.bs.modal', function (e) {
        limpiarFuncionamientoHepatico();
	});

	$('#pruebasdefuncionamientohepatico').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionFuncionamientoHepatico(estudioEditar);
			 
		}
	});

	function edicionFuncionamientoHepatico(estudio) {
        cajaResultadoTGOFuncionamientoH.value = estudio.resultados[0].resultado;
        cajaResultadoTGPFuncionamientoH.value = estudio.resultados[1].resultado;
        cajaResultadoProteinasTotalesFuncionamientoH.value = estudio.resultados[2].resultado;
        cajaResultadoAlbumina.value = estudio.resultados[3].resultado;
        cajaResultadoGlobulinaFuncionamientoH.value = estudio.resultados[4].resultado;
        cajaResultadoGlobulinaRelacionAG.value = estudio.resultados[5].resultado;
        cajaResultadoBilirrubinaTotal.value = estudio.resultados[6].resultado;
        cajaResultadoBilirrubinaDirecta.value = estudio.resultados[7].resultado;
        cajaResultadoBilirrubinaIndirecta.value = estudio.resultados[8].resultado;
        cajaResultadoFosfatasaAlcalina.value = estudio.resultados[9].resultado;
        cajaResultadoLDH.value = estudio.resultados[10].resultado;
	}

</script>