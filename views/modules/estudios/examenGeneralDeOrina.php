<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Examen general de orina");
?>
<div class="modal fade" id="examengeneraldeorina" tabindex="-1" role="dialog" aria-labelledby="examengeneraldeorina" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Examen general de orina</h5>
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
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoColorOrina">Color:</label>
				        			<input class="form-control" type="text" name="cajaResultadoColorOrina" id="cajaResultadoColorOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoAspectoOrina">Aspecto:</label>
				        			<input class="form-control" type="text" name="cajaResultadoAspectoOrina" id="cajaResultadoAspectoOrina" required>
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
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoDensidadOrina">Densidad:</label>
				        			<input class="form-control" type="text" name="cajaResultadoDensidadOrina" id="cajaResultadoDensidadOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoPHOrina">PH:</label>
				        			<input class="form-control" type="text" name="cajaResultadoPHOrina" id="cajaResultadoPHOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoUrobinilogenoOrina">Urobinilógeno:</label>
				        			<input class="form-control" type="text" name="cajaResultadoUrobinilogenoOrina" id="cajaResultadoUrobinilogenoOrina" required>
		        				</div>
		        			</div>
		        			<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>EU/dL</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoBilirrubinaOrina">Bilirrubina:</label>
				        			<input class="form-control" type="text" name="cajaResultadoBilirrubinaOrina" id="cajaResultadoBilirrubinaOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoHemoglobinaOrina">Hemoglobina:</label>
				        			<input class="form-control" type="text" name="cajaResultadoHemoglobinaOrina" id="cajaResultadoHemoglobinaOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoCuerposCetonicosOrina">Cuerpos cetónicos:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCuerposCetonicosOrina" id="cajaResultadoCuerposCetonicosOrina" required>
		        				</div>
		        			</div>
		        			<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>mg/dL</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoGlucosaOrina">Glucosa:</label>
				        			<input class="form-control" type="text" name="cajaResultadoGlucosaOrina" id="cajaResultadoGlucosaOrina" required>
		        				</div>
		        			</div>
		        			<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>mg/dL</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoProteinasOrina">Proteínas:</label>
				        			<input class="form-control" type="text" name="cajaResultadoProteinasOrina" id="cajaResultadoProteinasOrina" required>
		        				</div>
		        			</div>
		        			<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>mg/dL</p>
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoNitritoOrina">Nitrito:</label>
				        			<input class="form-control" type="text" name="cajaResultadoNitritoOrina" id="cajaResultadoNitritoOrina" required>
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
				        			<label for="cajaResultadoBacteriasOrina">Bacterias:</label>
				        			<input class="form-control" type="text" name="cajaResultadoBacteriasOrina" id="cajaResultadoBacteriasOrina" required>
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
				        			<label for="cajaResultadoCelulasOrina">Células:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCelulasOrina" id="cajaResultadoCelulasOrina" required>
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
				        			<label for="cajaResultadoLeucocitosOrina">Leucocitos:</label>
				        			<input class="form-control" type="text" name="cajaResultadoLeucocitosOrina" id="cajaResultadoLeucocitosOrina" required>
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
				        			<label for="cajaResultadoEritrocitosOrina">Eritrocitos:</label>
				        			<input class="form-control" type="text" name="cajaResultadoEritrocitosOrina" id="cajaResultadoEritrocitosOrina" required>
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
				        			<label for="cajaResultadoCilindrosOrina">Cilindros:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCilindrosOrina" id="cajaResultadoCilindrosOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoCristalesOrina">Cristales:</label>
				        			<input class="form-control" type="text" name="cajaResultadoCristalesOrina" id="cajaResultadoCristalesOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
				        			<label for="cajaResultadoMucinaOrina">Mucina:</label>
				        			<input class="form-control" type="text" name="cajaResultadoMucinaOrina" id="cajaResultadoMucinaOrina" required>
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
				        			<label for="cajaResultadoLevadurasOrina">Levaduras:</label>
				        			<input class="form-control" type="text" name="cajaResultadoLevadurasOrina" id="cajaResultadoLevadurasOrina" required>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
		        				<div class="form-group">
								    <label for="cajaObservacionesOrina">Observaciones:</label>
								    <textarea class="form-control" id="cajaObservacionesOrina" rows="3" name="cajaObservacionesOrina"></textarea>
								</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarExamenGeneralDeOrina()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
	function validarExamenGeneralDeOrina() {
		// if (cajaResultadoColorOrina.value && cajaResultadoAspectoOrina.value && cajaResultadoDensidadOrina.value && cajaResultadoPHOrina.value && cajaResultadoUrobinilogenoOrina.value && cajaResultadoBilirrubinaOrina.value && cajaResultadoHemoglobinaOrina.value && cajaResultadoCuerposCetonicosOrina.value && cajaResultadoGlucosaOrina.value && cajaResultadoProteinasOrina.value && cajaResultadoNitritoOrina.value && cajaResultadoBacteriasOrina.value && cajaResultadoCelulasOrina.value && cajaResultadoLeucocitosOrina.value && cajaResultadoEritrocitosOrina.value && cajaResultadoCilindrosOrina.value && cajaResultadoCristalesOrina.value && cajaResultadoMucinaOrina.value && cajaResultadoLevadurasOrina.value && cajaResultadoLevadurasOrina.value) {

			let estudio = {
				idmodal: 'examengeneraldeorina',
				nombre: 'Examen general de orina',
				resultados:
				[{
					nombre: 'Color',
					resultado: cajaResultadoColorOrina.value,
					limites: []
				},
				{
					nombre: 'Aspecto',
					resultado: cajaResultadoAspectoOrina.value,
					limites: []
				},
				{
					nombre: 'Densidad',
					resultado: cajaResultadoDensidadOrina.value,
					limites: []
				},
				{
					nombre: 'Urobinilógeno',
					resultado: cajaResultadoUrobinilogenoOrina.value,
					limites: []
				},
				{
						nombre: 'PH',
						resultado: cajaResultadoPHOrina.value,
						limites: []
				},
				{
					nombre: 'Bilirrubina',
					resultado: cajaResultadoBilirrubinaOrina.value,
					limites: []
				},
				{
					nombre: 'Hemoglobina',
					resultado: cajaResultadoHemoglobinaOrina.value,
					limites: []
				},
				{
					nombre: 'Cuerpos cetónicos',
					resultado: cajaResultadoCuerposCetonicosOrina.value,
					limites: []
				},
				{
					nombre: 'Glucosa',
					resultado: cajaResultadoGlucosaOrina.value,
					limites: []
				},
				{
					nombre: 'Proteínas',
					resultado: cajaResultadoProteinasOrina.value,
					limites: []
				},
				{
					nombre: 'Nitrito',
					resultado: cajaResultadoNitritoOrina.value,
					limites: []
				},
				{
					nombre: 'Bacterias',
					resultado: cajaResultadoBacteriasOrina.value,
					limites: []
				},
				{
					nombre: 'Células',
					resultado: cajaResultadoCelulasOrina.value,
					limites: []
				},
				{
					nombre: 'Leucocitos',
					resultado: cajaResultadoLeucocitosOrina.value,
					limites: []
				},
				{
					nombre: 'Eritrocitos',
					resultado: cajaResultadoEritrocitosOrina.value,
					limites: []
				},
				{
					nombre: 'Cilindros',
					resultado: cajaResultadoCilindrosOrina.value,
					limites: []
				},
				{
					nombre: 'Cristales',
					resultado: cajaResultadoCristalesOrina.value,
					limites: []
				},
				{
					nombre: 'Mucina',
					resultado: cajaResultadoMucinaOrina.value,
					limites: []
				},
				{
					nombre: 'Levaduras',
					resultado: cajaResultadoLevadurasOrina.value,
					limites: []
				}],
				observaciones: cajaObservacionesOrina.value,
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalExamenGeneralDeOrina();
			limpiarExamenGeneralDeOrina();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalExamenGeneralDeOrina() {
		$(`#examengeneraldeorina`).modal('toggle');
	}

	function limpiarExamenGeneralDeOrina() {
		cajaResultadoColorOrina.value = "";
		cajaResultadoAspectoOrina.value = "";
		cajaResultadoDensidadOrina.value = "";
		cajaResultadoPHOrina.value = "";
		cajaResultadoBilirrubinaOrina.value = "";
		cajaResultadoHemoglobinaOrina.value = "";
		cajaResultadoCuerposCetonicosOrina.value = "";
		cajaResultadoGlucosaOrina.value = "";
		cajaResultadoProteinasOrina.value = "";
		cajaResultadoNitritoOrina.value = "";
		cajaResultadoBacteriasOrina.value = "";
		cajaResultadoCelulasOrina.value = "";
		cajaResultadoLeucocitosOrina.value = "";
		cajaResultadoEritrocitosOrina.value = "";
		cajaResultadoCilindrosOrina.value = "";
		cajaResultadoCristalesOrina.value = "";
		cajaResultadoMucinaOrina.value = "";
		cajaResultadoLevadurasOrina.value = "";
		cajaObservacionesOrina.value = "";
	}

	$('#examengeneraldeorina').on('hidden.bs.modal', function (e) {
  		limpiarExamenGeneralDeOrina();
	});

	$('#examengeneraldeorina').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionExamenGeneralDeOrina(estudioEditar);
			 
		}
	});

	function edicionExamenGeneralDeOrina(estudio) {
        cajaResultadoColorOrina.value = estudio.resultados[0].resultado;
        cajaResultadoAspectoOrina.value = estudio.resultados[1].resultado;
        cajaResultadoDensidadOrina.value = estudio.resultados[2].resultado;
        cajaResultadoUrobinilogenoOrina.value = estudio.resultados[3].resultado;
        cajaResultadoPHOrina.value = estudio.resultados[4].resultado;
        cajaResultadoBilirrubinaOrina.value = estudio.resultados[5].resultado;
        cajaResultadoHemoglobinaOrina.value = estudio.resultados[6].resultado;
        cajaResultadoCuerposCetonicosOrina.value = estudio.resultados[7].resultado;
        cajaResultadoGlucosaOrina.value = estudio.resultados[8].resultado;
        cajaResultadoProteinasOrina.value = estudio.resultados[9].resultado;
        cajaResultadoNitritoOrina.value = estudio.resultados[10].resultado;
        cajaResultadoBacteriasOrina.value = estudio.resultados[11].resultado;
        cajaResultadoCelulasOrina.value = estudio.resultados[12].resultado;
        cajaResultadoLeucocitosOrina.value = estudio.resultados[13].resultado;
        cajaResultadoEritrocitosOrina.value = estudio.resultados[14].resultado;
        cajaResultadoCilindrosOrina.value = estudio.resultados[15].resultado;
        cajaResultadoCristalesOrina.value = estudio.resultados[16].resultado;
        cajaResultadoMucinaOrina.value = estudio.resultados[17].resultado;
        cajaResultadoLevadurasOrina.value = estudio.resultados[18].resultado;
        cajaObservacionesOrina.value = estudio.observaciones; 
	}


</script>