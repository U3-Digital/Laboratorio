<?php
$controller = new Controller();
$respuesta = $controller->ctlBuscarEstudio("Covid-19");
?>
<div class="modal fade" id="covid-19" tabindex="-1" role="dialog" aria-labelledby="covid-19" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">Covid-19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoIgGCovid19">IgG:</label>
              <input type="text" name="cajaResultadoIgGCovid19" id="cajaResultadoIgGCovid19" class="form-control" value="Negativo">
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
              <label for="cajaResultadoIgMCovid19">IgM:</label>
              <input type="text" name="cajaResultadoIgMCovid19" id="cajaResultadoIgMCovid19" class="form-control" value="Negativo">
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <br />
            <p>Negativo</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="form-group">
              <label for="cajaObservacionesCovid19">Observaciones:</label>
              <textarea name="cajaObservacionesCovid19" id="cajaObservacionesCovid19" class="form-control" rows="3"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarCovid19()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarCovid19() {

    let estudio = {
      idmodal: 'covid-19',
      nombre: 'Covid-19',
      resultados: [{
          nombre: 'IgG',
          resultado: cajaResultadoIgGCovid19.value,
          limites: ['Negativo']
        },
        {
          nombre: 'IgM',
          resultado: cajaResultadoIgMCovid19.value,
          limites: ['Negativo']
        }
      ],
      observaciones: cajaObservacionesCovid19.value,
      costo: <?php if ($respuesta) {
                echo $respuesta["costo"];
              } else {
                echo "0";
              } ?>
    }
    agregarEstudio(estudio);
    cerrarModalCovid19();
    limpiarCovid19();
  }

  function cerrarModalCovid19() {
    $(`#covid-19`).modal('toggle');
  }

  function limpiarCovid19() {
    cajaResultadoIgGCovid19.value = '';
    cajaResultadoIgMCovid19.value = '';
    cajaObservacionesCovid19.value = '';
  }

  $('#covid-19').on('hidden.bs.modal', function(e) {
    limpiarCovid19();
  });

  $('#covid-19').on('show.bs.modal', function(e) {
    if (editando === true) {
      edicionCovid19(estudioEditar);
    }
  });

  function edicionCovid19(estudio) {
    cajaResultadoIgGCovid19.value = estudio.resultados[0].resultado;
    cajaResultadoIgMCovid19.value = estudio.resultados[1].resultado;
    cajaObservacionesCovid19.value = estudio.observaciones;
  }
</script>