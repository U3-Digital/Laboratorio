<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Perfil de lipidos");
?>
<div class="modal fade" id="perfildelipidos" tabindex="-1" role="dialog" aria-labelledby="perfildelipidos" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Perfil de lípidos</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row justify-content-center">
		        	<div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoColesterol">Colesterol:</label>
                                    <input class="form-control" type="text" id="cajaResultadoColesterol" name="cajaResultadoColesterol" onkeyup="calcularColHdl(event.target.value, hdlColesterol)">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>mg/dl</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                Límites de referencia
                                <p>150 - 230 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoTrigliceridos">Triglicéridos:</label>
                                    <input class="form-control" type="text" id="cajaResultadoTrigliceridos" name="cajaResultadoTrigliceridos" onkeyup="calcularLDL(event.target.value, hdlColesterol, colesterol)">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>mg/dl</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>0 - 150 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoHDLColesterol">HDL-Colesterol:</label>
                                    <input class="form-control" type="text" id="cajaResultadoHDLColesterol" name="cajaResultadoHDLColesterol" onkeyup="calcularColHdl(colesterol, event.target.value)">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>mg/dl</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>35 - 55 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoLDLColesterol">LDL-Colesterol:</label>
                                    <input class="form-control" type="text" id="cajaResultadoLDLColesterol" name="cajaResultadoLDLColesterol">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>mg/dl</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>Hasta 150 mg/dl</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cajaResultadoCOLHDL">COL/HDL:</label>
                                    <input class="form-control" type="text" id="cajaResultadoCOLHDL" name="cajaResultadoCOLHDL">
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <p>mg/dl</p>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <br>
                                <!-- <p>0 - 150 mg/dl</p> -->
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarPerfilDeLipidos()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

    let colesterol = '0';
    let hdlColesterol = '0';
    let trigliceridos = 0;

    calcularColHdl(colesterol, hdlColesterol);

    function calcularColHdl (col, hdl) {
        if (col && hdl) {
            if (!isNaN(col) && !isNaN(hdl)) {
                colesterol = col;
                calcularLDL(trigliceridos, hdl, colesterol);
                if (hdl > 0) {
                    cajaResultadoCOLHDL.value = Number.parseFloat(col / hdl).toFixed(3);
                    hdlColesterol = hdl;
                }
            }
        }
    }


    function calcularLDL(tri, hdl, col) {
        if (tri && hdl && col) {
            if (!isNaN(tri) && !isNaN(hdl) && !isNaN(col)) {
                let ldl = Number.parseFloat(tri / 5) + Number.parseFloat(hdl) - Number.parseFloat(col);
                cajaResultadoLDLColesterol.value = ldl.toFixed(3);
                trigliceridos = tri;
                hdlColesterol = hdl;
                colesterol = col;
            }
        }
    }
	
	function validarPerfilDeLipidos() {
        /* if (cajaResultadoColesterol.value && cajaResultadoTrigliceridos.value && 
            cajaResultadoHDLColesterol.value && cajaResultadoLDLColesterol.value && 
            cajaResultadoCOLHDL.value) { */

			let estudio = {
				idmodal: 'perfildelipidos',
				nombre: 'Perfil de lípidos',
				resultados:
				[{
					nombre: 'Colesterol',
					resultado: cajaResultadoColesterol.value,
					limites: ['150 - 230 mg/dl']
                },
                {
					nombre: 'Triglicéridos',
					resultado: cajaResultadoTrigliceridos.value,
					limites: ['0 - 150 mg/dl']
                },
                {
					nombre: 'HDL-Colesterol',
					resultado: cajaResultadoHDLColesterol.value,
					limites: ['35 - 55 mg/dl']
                },
                {
					nombre: 'LDL-Colesterol',
					resultado: cajaResultadoLDLColesterol.value,
					limites: ['Hasta 150 mg/dl']
                },
                {
					nombre: 'COL/HDL',
					resultado: cajaResultadoCOLHDL.value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalPerfilDeLipidos();
			limpiarPerfilDeLipidos();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalPerfilDeLipidos() {
		$(`#perfildelipidos`).modal('toggle');
	}

	function limpiarPerfilDeLipidos() {
        cajaResultadoColesterol.value = '';
        cajaResultadoTrigliceridos.value = '';
        cajaResultadoHDLColesterol.value = '';
        cajaResultadoLDLColesterol.value = '';
        cajaResultadoCOLHDL.value = '';
	}

	$('#perfildelipidos').on('hidden.bs.modal', function (e) {
        limpiarPerfilDeHepatitisA();
	});

	$('#perfildelipidos').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionPerfilDeLipidos(estudioEditar);
			 
		}
	});

	function edicionPerfilDeLipidos(estudio) {
        cajaResultadoColesterol.value = estudio.resultados[0].resultado;
        cajaResultadoTrigliceridos.value = estudio.resultados[1].resultado;
        cajaResultadoHDLColesterol.value = estudio.resultados[2].resultado;
        cajaResultadoLDLColesterol.value = estudio.resultados[3].resultado;
        cajaResultadoCOLHDL.value = estudio.resultados[4].resultado;
	}

</script>