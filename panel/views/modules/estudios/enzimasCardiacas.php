<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Enzimas cardiacas");
?>
<div class="modal fade" id="enzimascardiacas" tabindex="-1" role="dialog" aria-labelledby="enzimascardiacas" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Enzimas cardíacas</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoTGO">TGO:</label>
		        			<input class="form-control" type="text" name="cajaResultadoTGO" id="cajaResultadoTGO" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>U/L</p>
		        	</div>
		        	<div class="col-md-3">
		        		<p>Límites de referencia</p>
						<p>5 - 40 U/L</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoCK">CK:</label>
		        			<input class="form-control" type="text" name="cajaResultadoCK" id="cajaResultadoCK" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>U/L</p>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
						<p>38 - 397 U/L</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoCKMB">CKMB:</label>
		        			<input class="form-control" type="text" name="cajaResultadoCKMB" id="cajaResultadoCKMB" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>U/L</p>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
						<p>0 - 24 U/L</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoDHL">DHL:</label>
		        			<input class="form-control" type="text" name="cajaResultadoDHL" id="cajaResultadoDHL" required>
		        		</div>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
		        	    <p>U/L</p>
		        	</div>
		        	<div class="col-md-3 align-self-center">
		        		<br>
						<p>98 - 192 U/L</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarEnzimasCardiacas()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarEnzimasCardiacas() {
		// if (cajaResultadoTGO.value && cajaResultadoCK.value && cajaResultadoCKMB.value && cajaResultadoDHL.value) {

			let estudio = {
				idmodal: "enzimascardiacas",
				nombre: "Enzimas cardíacas",
				resultados:
				[{
					nombre: "TGO",
					resultado: cajaResultadoTGO.value,
					limites: ["5 - 40 U/L"]
				},
				{
					nombre: "CK",
					resultado: cajaResultadoCK.value,
					limites: ["38 - 397 U/L"]
				},
				{
					nombre: "CKMB",
					resultado: cajaResultadoCKMB.value,
					limites: ["0 - 24 U/L"]
				},
				{
					nombre: "DHL",
					resultado: cajaResultadoDHL.value,
					limites: ["98 - 192 U/L"]
				}],
				observaciones: "",
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalEnzimasCardiacas();
			limpiarEnzimasCardiacas();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalEnzimasCardiacas() {
		$(`#enzimascardiacas`).modal("toggle");
	}

	function limpiarEnzimasCardiacas() {
		cajaResultadoTGO.value = "";
		cajaResultadoCK.value = "";
		cajaResultadoCKMB.value = "";
		cajaResultadoDHL.value = "";
	}

	$("#enzimascardiacas").on("hidden.bs.modal", function (e) {
  		limpiarEnzimasCardiacas();
	});

	$("#enzimascardiacas").on("show.bs.modal", function (e) {
		if (editando === true) {
			edicionEnzimasCardiacas(estudioEditar);
			 
		}
	});

	function edicionEnzimasCardiacas(estudio) {
		cajaResultadoTGO.value = estudio.resultados[0].resultado;
		cajaResultadoCK.value = estudio.resultados[1].resultado;
		cajaResultadoCKMB.value = estudio.resultados[2].resultado;
		cajaResultadoDHL.value = estudio.resultados[3].resultado;
	}

</script>
