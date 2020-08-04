<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Coprologico coproparasitologico");
?>
<div class="modal fade" id="coprologicocoproparasitologico" tabindex="-1" role="dialog" aria-labelledby="coprologicocoproparasitologico" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Coprológico coproparasitológico</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="row">
		        			<div class="col-md-8">
		        				Análisis físico
		        			</div>
		        		</div>
		        		<br>
		        		<div class="row">
		        			<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoColor">Color:</label>
				        			<input class="form-control" type="text" id="cajaResultadoColor" name="cajaResultadoColor" required>
				        		</div>
				        	</div>
		        		</div>
				        <div class="row">
				        	<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoConsistencia">Consistencia:</label>
				        			<input class="form-control" type="text" id="cajaResultadoConsistencia" name="cajaResultadoConsistencia" required>
				        		</div>
				        	</div>
				        </div>	
				        <div class="row">
				        	<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoRestosAlimenticios">Restos alimenticios:</label>
				        			<input class="form-control" type="text" id="cajaResultadoRestosAlimenticios" name="cajaResultadoRestosAlimenticios" required>
				        		</div>
				        	</div>
				        </div>	 
				        <div class="row">
				        	<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoMoco">Moco:</label>
				        			<input class="form-control" type="text" id="cajaResultadoMoco" name="cajaResultadoMoco" required>
				        		</div>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoSangreAparente">Sangre aparente:</label>
				        			<input class="form-control" type="text" id="cajaResultadoSangreAparente" name="cajaResultadoSangreAparente" required>
				        		</div>
				        	</div>
				        </div>   
				        <div class="row">
				        	<div class="col-md-8">
				        		Análisis químico
				        	</div>
				        </div>
				        <br>
				        <div class="row">
		        			<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoAlmidon">Almidón:</label>
				        			<input class="form-control" type="text" id="cajaResultadoAlmidon" name="cajaResultadoAlmidon" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoPH">PH:</label>
				        			<input class="form-control" type="text" id="cajaResultadoPH" name="cajaResultadoPH" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoHemoglobinaCopro">Hemoglobina:</label>
				        			<input class="form-control" type="text" id="cajaResultadoHemoglobinaCopro" name="cajaResultadoHemoglobinaCopro" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoSangreOculta">Sangre oculta:</label>
				        			<input class="form-control" type="text" id="cajaResultadoSangreOculta" name="cajaResultadoSangreOculta" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12">
				        		<div class="form-group">
				        			<label for="cajaResultadoAzucaresReductores">Azúcares reductores:</label>
				        			<input class="form-control" type="text" id="cajaResultadoAzucaresReductores" name="cajaResultadoAzucaresReductores" required>
				        		</div>
				        	</div>
		        		</div>
		        	</div>
		        	<div class="col-md-6">
		        		<div class="row">
		        			<div class="col-md-8">
		        				Análisis microscópico
		        			</div>
		        		</div>
		        		<br>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoFibrasMusculares">Fibras musculares:</label>
				        			<input class="form-control" type="text" id="cajaResultadoFibrasMusculares" name="cajaResultadoFibrasMusculares" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoFibrasVegetales">Fibras vegetales:</label>
				        			<input class="form-control" type="text" id="cajaResultadoFibrasVegetales" name="cajaResultadoFibrasVegetales" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoCelulasEpiteliales">Células epiteliales:</label>
				        			<input class="form-control" type="text" id="cajaResultadoCelulasEpiteliales" name="cajaResultadoCelulasEpiteliales" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoLeucocitosCopro">Leucocitos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoLeucocitosCopro" name="cajaResultadoLeucocitosCopro" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoEritrocitos">Eritrocitos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoEritrocitos" name="cajaResultadoEritrocitos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoCristales">Cristales:</label>
				        			<input class="form-control" type="text" id="cajaResultadoCristales" name="cajaResultadoCristales" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoLevaduras">Levaduras:</label>
				        			<input class="form-control" type="text" id="cajaResultadoLevaduras" name="cajaResultadoLevaduras" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoParasitos">Parásitos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoParasitos" name="cajaResultadoParasitos" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoCuerposGrasos">Cuerpos grasos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoCuerposGrasos" name="cajaResultadoCuerposGrasos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>Por campo</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoBacterias">Bacterias:</label>
				        			<input class="form-control" type="text" id="cajaResultadoBacterias" name="cajaResultadoBacterias" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoCoproparasitoscopico">Coproparasitoscópico:</label>
				        			<input class="form-control" type="text" id="cajaResultadoCoproparasitoscopico" name="cajaResultadoCoproparasitoscopico" required>
				        		</div>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaObservacionesCoprologico">Observaciones:</label>
				        			<textarea class="form-control" id="cajaObservacionesCoprologico" rows="3" name="cajaObservacionesCoprologico"></textarea>
				        		</div>
				        	</div>
		        		</div>
		        	</div>
		        </div>

		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarCoprologicoCoproparasitologico()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	
	
	function validarCoprologicoCoproparasitologico() {
		if (cajaResultadoColor.value && cajaResultadoConsistencia.value && cajaResultadoRestosAlimenticios.value && cajaResultadoMoco.value && cajaResultadoSangreAparente.value && cajaResultadoAlmidon.value && cajaResultadoPH.value && cajaResultadoHemoglobinaCopro.value && cajaResultadoSangreOculta.value && cajaResultadoAzucaresReductores.value && cajaResultadoFibrasMusculares.value && cajaResultadoFibrasVegetales.value && cajaResultadoCelulasEpiteliales.value && cajaResultadoLeucocitosCopro.value && cajaResultadoEritrocitos.value && cajaResultadoCristales.value && cajaResultadoLevaduras.value && cajaResultadoParasitos.value && cajaResultadoCuerposGrasos.value && cajaResultadoBacterias.value && cajaResultadoCoproparasitoscopico.value) {

			let estudio = {
				nombre: 'Coprologico coproparasitológico',
				resultados: 
					[{
						resultado: cajaResultadoColor.value,
						limites: []
					},
					{
						resultado: cajaResultadoConsistencia.value,
						limites: []
					},
					{
						resultado: cajaResultadoRestosAlimenticios.value,
						limites: []
					},
					{
						resultado: cajaResultadoMoco.value,
						limites: []
					},
					{
						resultado: cajaResultadoSangreAparente.value,
						limites: []
					},
					{
						resultado: cajaResultadoAlmidon.value,
						limites: []
					},
					{
						resultado: cajaResultadoPH.value,
						limites: []
					},
					{
						resultado: cajaResultadoHemoglobinaCopro.value,
						limites: []
					},
					{
						resultado: cajaResultadoSangreOculta.value,
						limites: []
					},
					{
						resultado: cajaResultadoAzucaresReductores.value,
						limites: []
					},
					{
						resultado: cajaResultadoFibrasMusculares.value,
						limites: []
					},
					{
						resultado: cajaResultadoFibrasVegetales.value,
						limites: []
					},
					{
						resultado: cajaResultadoCelulasEpiteliales.value,
						limites: []
					},
					{
						resultado: cajaResultadoLeucocitosCopro.value,
						limites: []
					},
					{
						resultado: cajaResultadoEritrocitos.value,
						limites: []
					},
					{
						resultado: cajaResultadoCristales.value,
						limites: []
					},
					{
						resultado: cajaResultadoLevaduras.value,
						limites: []
					},
					{
						resultado: cajaResultadoParasitos.value,
						limites: []
					},
					{
						resultado: cajaResultadoCuerposGrasos.value,
						limites: []
					},
					{
						resultado: cajaResultadoBacterias.value,
						limites: []
					},
					{
						resultado: cajaResultadoCoproparasitoscopico.value,
						limites: []
					}],
				observaciones: cajaObservacionesCoprologico.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalCoprologicoCoproparasitologico();
			limpiarCoprologicoCoproparasitologico();
		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalCoprologicoCoproparasitologico() {
		$(`#coprologicocoproparasitologico`).modal('toggle');
	}

	function limpiarCoprologicoCoproparasitologico() {
		
		cajaResultadoColor.value = "";
		cajaResultadoConsistencia.value = "";
		cajaResultadoRestosAlimenticios.value = "";
		cajaResultadoMoco.value = "";
		cajaResultadoSangreAparente.value = "";
		cajaResultadoAlmidon.value = "";
		cajaResultadoPH.value = "";
		cajaResultadoHemoglobinaCopro.value = "";
		cajaResultadoSangreOculta.value = "";
		cajaResultadoAzucaresReductores.value = "";
		cajaResultadoFibrasMusculares.value = "";
		cajaResultadoFibrasVegetales.value = "";
		cajaResultadoCelulasEpiteliales.value = "";
		cajaResultadoLeucocitosCopro.value = "";
		cajaResultadoEritrocitos.value = "";
		cajaResultadoCristales.value = "";
		cajaResultadoLevaduras.value = "";
		cajaResultadoParasitos.value = "";
		cajaResultadoCuerposGrasos.value = "";
		cajaResultadoBacterias.value = "";
		cajaResultadoCoproparasitoscopico.value = "";
		cajaObservacionesCoprologico.value = "";
	}
	
</script>