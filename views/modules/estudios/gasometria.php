<?php
$controller = new Controller();
$respuesta = $controller->ctlBuscarEstudio("Gasometria");
?>
<div class="modal fade" id="gasometria" tabindex="-1" role="dialog" aria-labelledby="gasometria" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">Gasometría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label for="cajaTipoGasometria">Tipo:</label>
              <select name="cajaTipoGasometria" id="cajaTipoGasometria" class="form-control">
                <option value="venosa">Venosa</option>
                <option value="arterial">Arterial</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <br>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoPHGasometria">PH:</label>
                  <input class="form-control" type="text" name="cajaResultadoPHGasometria" id="cajaResultadoPHGasometria">
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoPCO2Gasometria">pCO2:</label>
                  <input class="form-control" type="text" name="cajaResultadoPCO2Gasometria" id="cajaResultadoPCO2Gasometria">
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoPO2Gasometria">PO2:</label>
                  <input class="form-control" type="text" name="cajaResultadoPO2Gasometria" id="cajaResultadoPO2Gasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>mmHg</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoHtcGasometria">Htc:</label>
                  <input class="form-control" type="text" name="cajaResultadoHtcGasometria" id="cajaResultadoHtcGasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>%</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                Calculados:
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoHCO3Gasometria">HCO3:</label>
                  <input class="form-control" type="text" name="cajaResultadoHCO3Gasometria" id="cajaResultadoHCO3Gasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>mmol/L</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoHCO3stdGasometria">HCO3 std:</label>
                  <input class="form-control" type="text" name="cajaResultadoHCO3stdGasometria" id="cajaResultadoHCO3stdGasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>mmol/L</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoTCO2Gasometria">TCO2:</label>
                  <input class="form-control" type="text" name="cajaResultadoTCO2Gasometria" id="cajaResultadoTCO2Gasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>mmol/L</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoBEecfGasometria">BE ecf:</label>
                  <input class="form-control" type="text" name="cajaResultadoBEecfGasometria" id="cajaResultadoBEecfGasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>mmol/L</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoBEBGasometria">BE (B):</label>
                  <input class="form-control" type="text" name="cajaResultadoBEBGasometria" id="cajaResultadoBEBGasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>mmol/L</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoSO2cGasometria">SO2c:</label>
                  <input class="form-control" type="text" name="cajaResultadoSO2cGasometria" id="cajaResultadoSO2cGasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>%</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="cajaResultadoTHbcGasometria">THbc:</label>
                  <input class="form-control" type="text" name="cajaResultadoTHbcGasometria" id="cajaResultadoTHbcGasometria">
                </div>
              </div>
              <div class="col-md-4 align-self-center">
                <br>
                <p>%</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <table>
                  <tr>
                    <th>
                      Límites de referencia
                    </th>
                  </tr>
                  <tr>
                    <td>Venosa</td>
                    <td>Arterial</td>
                  </tr>
                  <tr>
                    <td>7.36 - 7.40</td>
                    <td>7.35 - 7.45</td>
                  </tr>
                  <tr">
                    <td style="padding-top: 4em;">40 - 50 mmHg</td>
                    <td style="padding-top: 4em;">25 - 48 mmHg</td>
                    </tr>
                    <tr>
                      <td style="padding-top: 3.5em;">35 - 45 mmHg</td>
                      <td style="padding-top: 3.5em;">83 - 108 mmHg</td>
                    </tr>
                    <tr>
                      <td style="padding-top: 4em;">35 - 45 %</td>
                      <td style="padding-top: 4em;">35 - 51 %</td>
                    </tr>
                    <tr>
                      <td style="padding-top: 34em;">55 - 70 %</td>
                      <td style="padding-top: 34em;">95 - 99 %</td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarGasometria()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarGasometria() {
    /* if (cajaResultadoPHGasometria.value && cajaResultadoPCO2Gasometria.value && cajaResultadoPO2Gasometria.value
     && cajaResultadoHtcGasometria.value && cajaResultadoHCO3Gasometria.value && cajaResultadoHCO3stdGasometria.value && cajaResultadoTCO2Gasometria.value
      && cajaResultadoBEecfGasometria && cajaResultadoBEBGasometria.value && cajaResultadoSO2cGasometria.value 
      && cajaResultadoTHbcGasometria.value ) { */

    let estudio = {
      idmodal: 'gasometria',
      nombre: `Gasometría ${cajaTipoGasometria.value}`,
      resultados: [{
          nombre: 'PH',
          resultado: cajaResultadoPHGasometria.value,
          limites: ['7.36 - 7.40', '7.35 - 7.45']
        },
        {
          nombre: 'PCO2',
          resultado: cajaResultadoPCO2Gasometria.value,
          limites: ['40 - 50 mmHg', '35 - 48 mmHg']
        },
        {
          nombre: 'PO2',
          resultado: cajaResultadoPO2Gasometria.value,
          limites: ['35 - 45 mmHg', '83 - 108 mmHg']
        },
        {
          nombre: 'Htc',
          resultado: cajaResultadoHtcGasometria.value,
          limites: ['35 - 45 %', '35 - 51 %']
        },
        {
          nombre: 'HCO3',
          resultado: cajaResultadoHCO3Gasometria.value,
          limites: []
        },
        {
          nombre: 'HCO3 std',
          resultado: cajaResultadoHCO3stdGasometria.value,
          limites: []
        },
        {
          nombre: 'TCO2',
          resultado: cajaResultadoTCO2Gasometria.value,
          limites: []
        },
        {
          nombre: 'BE ecf',
          resultado: cajaResultadoBEecfGasometria.value,
          limites: []
        },
        {
          nombre: 'BE (B)',
          resultado: cajaResultadoBEBGasometria.value,
          limites: []
        },
        {
          nombre: 'SO2c',
          resultado: cajaResultadoSO2cGasometria.value,
          limites: ['55 - 70%', '95 - 99%']
        },
        {
          nombre: 'THbc',
          resultado: cajaResultadoTHbcGasometria.value,
          limites: []
        },
      ],
      observaciones: cajaObservacionesOrina.value,
      costo: <?php if ($respuesta) {
                echo $respuesta["costo"];
              } else {
                echo "0";
              } ?>
    }
    agregarEstudio(estudio);
    cerrarModalGasometria();
    limpiarGasometria();

    /* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
  }

  function cerrarModalGasometria() {
    $(`#gasometria`).modal('toggle');
  }

  function limpiarGasometria() {
    cajaResultadoPHGasometria.value = "";
    cajaResultadoPCO2Gasometria.value = "";
    cajaResultadoPO2Gasometria.value = "";
    cajaResultadoHtcGasometria.value = "";
    cajaResultadoHCO3Gasometria.value = "";
    cajaResultadoHCO3stdGasometria.value = "";
    cajaResultadoTCO2Gasometria.value = "";
    cajaResultadoBEecfGasometria.value = "";
    cajaResultadoBEBGasometria.value = "";
    cajaResultadoSO2cGasometria.value = "";
    cajaResultadoTHbcGasometria.value = "";
  }

  $('#gasometria').on('hidden.bs.modal', function(e) {
    limpiarGasometria();
  });

  $('#gasometria').on('show.bs.modal', function(e) {
    if (editando === true) {
      edicionGasometria(estudioEditar);

    }
  });

  function edicionGasometria(estudio) {
    cajaResultadoPHGasometria.value = estudio.resultados[0].resultado;
    cajaResultadoPCO2Gasometria.value = estudio.resultados[1].resultado;
    cajaResultadoPO2Gasometria.value = estudio.resultados[2].resultado;
    cajaResultadoHtcGasometria.value = estudio.resultados[3].resultado;
    cajaResultadoHCO3Gasometria.value = estudio.resultados[4].resultado;
    cajaResultadoHCO3stdGasometria.value = estudio.resultados[5].resultado;
    cajaResultadoTCO2Gasometria.value = estudio.resultados[6].resultado;
    cajaResultadoBEecfGasometria.value = estudio.resultados[7].resultado;
    cajaResultadoBEBGasometria.value = estudio.resultados[8].resultado;
    cajaResultadoSO2cGasometria.value = estudio.resultados[9].resultado;
    cajaResultadoTHbcGasometria.value = estudio.resultados[10].resultado;
  }
</script>