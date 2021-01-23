<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("HGC");
?>
<div class="modal fade" id="hcgcuantitativa" tabindex="-1" role="dialog" aria-labelledby="hcgcuantitativa" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">HCG Cuantitativa</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="form-group">
		        			<label for="cajaResultadoCuantificacionHCG">Cuantificación de HCG:</label>
		        			<input class="form-control" type="text" name="cajaResultadoCuantificacionHCG" id="cajaResultadoCuantificacionHCG" required>
		        		</div>
		        	</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                Límites de referencia
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                Hombres:
                            </div>
                            <div class="col-md-6">
                                &lt; 3mUl/ml
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                Mujeres:
                            </div>
                            <div class="col-md-6">
                                &lt; 4mUl/ml
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                Mujeres menopáusicas:
                            </div>
                            <div class="col-md-6">
                                &lt; 13mUl/ml
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                Límites en embarazadas:
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                Semana de amenorrea:
                            </div>
                            <div class="col-md-3">
                                Media
                            </div>
                            <div class="col-md-3">
                                Límites
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                4 - 5
                            </div>
                            <div class="col-md-3">
                                7,400
                            </div>
                            <div class="col-md-3">
                                1,500 - 23,000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                5 - 6
                            </div>
                            <div class="col-md-3">
                                32,800
                            </div>
                            <div class="col-md-3">
                                3,400 - 135,300
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               6 - 7
                            </div>
                            <div class="col-md-3">
                                52,000
                            </div>
                            <div class="col-md-3">
                                10,500 - 161,000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               7 - 8
                            </div>
                            <div class="col-md-3">
                                74,000
                            </div>
                            <div class="col-md-3">
                                180,000 - 209,000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               8 - 9
                            </div>
                            <div class="col-md-3">
                                100,000
                            </div>
                            <div class="col-md-3">
                                37,500 - 219,000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               9 - 10
                            </div>
                            <div class="col-md-3">
                                105,000
                            </div>
                            <div class="col-md-3">
                                42,800 - 218,000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               10 - 11
                            </div>
                            <div class="col-md-3">
                                96,000
                            </div>
                            <div class="col-md-3">
                                33,700 - 218,700
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               11 - 12
                            </div>
                            <div class="col-md-3">
                                75,300
                            </div>
                            <div class="col-md-3">
                                21,800 - 193,200
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               12 - 13
                            </div>
                            <div class="col-md-3">
                                66,700
                            </div>
                            <div class="col-md-3">
                                20,300 - 166,100
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               13 - 14
                            </div>
                            <div class="col-md-3">
                                65,900
                            </div>
                            <div class="col-md-3">
                                15,400 - 190,000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                2° trimestre
                            </div>
                            <div class="col-md-3">
                                27,150
                            </div>
                            <div class="col-md-3">
                                2,800 - 176,100
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                3° trimestre
                            </div>
                            <div class="col-md-3">
                                27,200
                            </div>
                            <div class="col-md-3">
                                2,800 - 144,400
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarHGCCuantitativa()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarHGCCuantitativa() {
		// if (cajaResultadoCuantificacionHCG.value) {

			let estudio = {
				idmodal: 'hcg',
				nombre: 'HCG',
				resultados:
				[{
					nombre: 'Cuantificacion de HCG',
					resultado: cajaResultadoCuantificacionHCG.value,
					limites: ['Hombres: < 3 mUl/ml', 'Mujeres cícliclas: < 4 mUl/ml', 'Mujeres menopáusicas: < 13 mUl/ml', '1,500 - 23,000', '3,400 - 135,300', '10,500 - 161,000', '18,000 - 209,000', '37,500 - 219,000', '42,800 - 218,000', '33,700 - 218,700', '21,800 - 193,200', '20,300 - 166,100', '15,400 - 190,000', '2,800 - 176,100', '2,800 - 144,400']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalHCGCuantitativa();
			limpiarHCGCuantitativa();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalHCGCuantitativa() {
		$(`#hcgcuantitativa`).modal('toggle');
	}

	function limpiarHCGCuantitativa() {
		cajaResultadoCuantificacionHCG.value = "";
	}

	$('#hcgcuantitativa').on('hidden.bs.modal', function (e) {
        limpiarHCG();
	});

	$('#hcgcuantitativa').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionHCGCuantitativa(estudioEditar);
			 
		}
	});

	function edicionHCGCuantitativa(estudio) {
        cajaResultadoCuantificacionHCG.value = estudio.resultados[0].resultado;
	}

</script>