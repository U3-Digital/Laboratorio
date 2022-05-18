<?php
$controller = new Controller();
$respuesta = $controller->ctlBuscarEstudio("Electrolitos sericos");
?>
<div class="modal fade" id="electrolitossericos" tabindex="-1" role="dialog" aria-labelledby="electrolitossericos" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">Electrolitos séricos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoSodioElectrolitos">Sodio:</label>
              <input class="form-control" type="text" name="cajaResultadoSodioElectrolitos" id="cajaResultadoSodioElectrolitos" required>
            </div>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>mmol/L</p>
          </div>
          <div class="col-md-3">
            <p>Límites de referencia</p>
            <p>137 - 145 mmol/L</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoPotasioElectrolitos">Potasio:</label>
              <input class="form-control" type="text" name="cajaResultadoPotasioElectrolitos" id="cajaResultadoPotasioElectrolitos" required>
            </div>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>mmol/L</p>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>3.5 - 5.1 mmol/L</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoClorurosElectrolitos">Cloruros:</label>
              <input class="form-control" type="text" name="cajaResultadoClorurosElectrolitos" id="cajaResultadoClorurosElectrolitos" required>
            </div>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>mmol/L</p>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>98 - 107 mmol/L</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoCalcioElectrolitos">Calcio:</label>
              <input type="text" name="cajaResultadoCalcioElectrolitos" id="cajaResultadoCalcioElectrolitos" class="form-control">
            </div>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>mg/dl</p>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>8.4 - 10.2 mg/dL</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoFosforoElectrolitos">Fosforo:</label>
              <input type="text" name="cajaResultadoFosforoElectrolitos" id="cajaResultadoFosforoElectrolitos" class="form-control">
            </div>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>meq/L</p>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>2.5 - 4.8 meq/L</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoMagnesioElectrolitos">Magnesio:</label>
              <input type="text" name="cajaResultadoMagnesioElectrolitos" id="cajaResultadoMagnesioElectrolitos" class="form-control">
            </div>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>meq/L</p>
          </div>
          <div class="col-md-3 align-self-center">
            <br>
            <p>1.6 - 2.6 meq/L</p>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarElectrolitosSericos()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarElectrolitosSericos() {
    // if (cajaResultadoSodioElectrolitos.value && cajaResultadoPotasioElectrolitos.value && cajaResultadoClorurosElectrolitos.value) {

    let estudio = {
      idmodal: 'electrolitossericos',
      nombre: 'Electrolitos séricos',
      resultados: [{
          nombre: 'Sodio',
          resultado: cajaResultadoSodioElectrolitos.value,
          limites: ['137 - 145 mmol/L']
        },
        {
          nombre: 'Potasio',
          resultado: cajaResultadoPotasioElectrolitos.value,
          limites: ['3.5 - 5.1 mmol/L']
        },
        {
          nombre: 'Cloruros',
          resultado: cajaResultadoClorurosElectrolitos.value,
          limites: ['98 - 107 mmol/L']
        },
        {
          nombre: 'Calcio',
          resultado: cajaResultadoCalcioElectrolitos.value,
          limites: ['8.4 - 10.2 mg/dL']
        },
        {
          nombre: 'Fosforo',
          resultado: cajaResultadoFosforoElectrolitos.value,
          limites: ['2.5 - 4.8 meq/L']
        },
        {
          nombre: 'Magnesio',
          resultado: cajaResultadoMagnesioElectrolitos.value,
          limites: ['1.6 - 2.6 meq/L']
        }
      ],
      observaciones: '',
      costo: <?php if ($respuesta) {
                echo $respuesta["costo"];
              } else {
                echo "0";
              } ?>
    }
    agregarEstudio(estudio);
    cerrarModalElectrolitosSericos();
    limpiarElectrolitosSericos();

    /* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
  }

  function cerrarModalElectrolitosSericos() {
    $(`#electrolitossericos`).modal('toggle');
  }

  function limpiarElectrolitosSericos() {
    cajaResultadoSodioElectrolitos.value = '';
    cajaResultadoPotasioElectrolitos.value = '';
    cajaResultadoClorurosElectrolitos.value = '';
    cajaResultadoCalcioElectrolitos.value = '';
    cajaResultadoFosforoElectrolitos.value = '';
    cajaResultadoMagnesioElectrolitos.value = '';
  }

  $('#electrolitossericos').on('hidden.bs.modal', function(e) {
    limpiarElectrolitosSericos();
  });

  $('#electrolitossericos').on('show.bs.modal', function(e) {
    if (editando === true) {
      edicionElectrolitosSericos(estudioEditar);

    }
  });

  function edicionElectrolitosSericos(estudio) {
    cajaResultadoSodioElectrolitos.value = estudio.resultados[0].resultado;
    cajaResultadoPotasioElectrolitos.value = estudio.resultados[1].resultado;
    cajaResultadoClorurosElectrolitos.value = estudio.resultados[2].resultado;
    cajaResultadoCalcioElectrolitos.value = estudio.resultados[3].resultado;
    cajaResultadoFosforoElectrolitos.value = estudio.resultados[4].resultado;
    cajaResultadoMagnesioElectrolitos.value = estudio.resultados[5].resultado;
  }
</script>
