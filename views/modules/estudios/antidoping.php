<?php
$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Antidoping");
?>
<div class="modal fade" id="antidoping" tabindex="-1" role="dialog" aria-labelledby="antidoping" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Antidoping</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoAnfetaminas">Anfetamínas:</label>
		        			<input class="form-control" type="text" id="cajaResultadoAnfetaminas" name="cajaResultadoAnfetaminas" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<p>Límites de referencia</p>
		        		<p>Negativo</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoBenzodiacepinas">Benzodiacepinas:</label>
		        			<input class="form-control" type="text" id="cajaResultadoBenzodiacepinas" name="cajaResultadoBenzodiacepinas" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6 align-self-center">
		        		<br>
		        		<p>Negativo</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoCocaina">Cocaína:</label>
		        			<input class="form-control" type="text" id="cajaResultadoCocaina" name="cajaResultadoCocaina" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6 align-self-center">
		        		<br>
		        		<p>Negativo</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoCMorfina">Morfina:</label>
		        			<input class="form-control" type="text" id="cajaResultadoMorfina" name="cajaResultadoMorfina" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6 align-self-center">
		        		<br>
		        		<p>Negativo</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="form-group">
		        			<label for="cajaResultadoMarihuana">Marihuana:</label>
		        			<input class="form-control" type="text" id="cajaResultadoMarihuana" name="cajaResultadoMarihuana" value="Negativo" required>
		        		</div>
		        	</div>
		        	<div class="col-md-6 align-self-center">
		        		<br>
		        		<p>Negativo</p>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarAntidoping()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	const cajaResultadoAnfetaminas = document.getElementById('cajaResultadoAnfetaminas');
	const cajaResultadoBenzodiacepinas = document.getElementById('cajaResultadoBenzodiacepinas');
	const cajaResultadoCocaina = document.getElementById('cajaResultadoCocaina');
	const cajaResultadoMorfina = document.getElementById('cajaResultadoMorfina');
	const cajaResultadoMarihuana = document.getElementById('cajaResultadoMarihuana');
	
	function validarAntidoping() {
		// if ((cajaResultadoAnfetaminas.value) && (cajaResultadoBenzodiacepinas.value) && cajaResultadoCocaina.value && cajaResultadoMorfina.value && cajaResultadoMarihuana.value) {

			let estudio = {
				idmodal: 'antidoping',
				nombre: 'Antidoping',
				resultados: 
					[{
						nombre: 'Anfetamínas',
						resultado: cajaResultadoAnfetaminas.value,
						limites: ['Negativo']
					},
					{
						nombre: 'Benzodiacepinas',
						resultado: cajaResultadoBenzodiacepinas.value,
						limites: ['Negativo']
					},
					{
						nombre: 'Cocaína',
						resultado: cajaResultadoCocaina.value,
						limites: ['Negativo']
					},
					{
						nombre: 'Morfina',
						resultado: cajaResultadoMorfina.value,
						limites: ['Negativo']
					},
					{
						nombre: 'Marihuana',
						resultado: cajaResultadoMarihuana.value,
						limites: ['Negativo']
					}],
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalAntidoping();
			limpiarAntidoping();
		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalAntidoping() {
		$(`#antidoping`).modal('toggle');
	}

	function limpiarAntidoping() {
		cajaResultadoAnfetaminas.value = "Negativo";
		cajaResultadoBenzodiacepinas.value = "Negativo";
		cajaResultadoCocaina.value = "Negativo";
		cajaResultadoMorfina.value = "Negativo";
		cajaResultadoMarihuana.value = "Negativo";
	}

	$('#antidoping').on('hidden.bs.modal', function (e) {
  		limpiarAntidoping();
	});

	$('#antidoping').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionAntidoping(estudioEditar);
			 
		}
	});

	function edicionAntidoping(estudio) {
		cajaResultadoAnfetaminas.value = estudio.resultados[0].resultado;
		cajaResultadoBenzodiacepinas.value = estudio.resultados[1].resultado;
		cajaResultadoCocaina.value = estudio.resultados[2].resultado;
		cajaResultadoMorfina.value = estudio.resultados[3].resultado;
		cajaResultadoMarihuana.value = estudio.resultados[4].resultado;
	}

</script>