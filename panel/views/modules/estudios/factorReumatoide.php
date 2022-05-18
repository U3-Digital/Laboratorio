<?php
$controller = new Controller();
$respuesta = $controller->ctlBuscarEstudio("Factor reumatoide");
?>
<div class="modal fade" id="factorreumatoide" tabindex="-1" role="dialog" aria-labelledby="factor reumatoide" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">Factor reumatoide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoFactorReumatoide">Factor reumatoide:</label>
              <input type="text" name="cajaResultadoFactorReumatoide" id="cajaResultadoFactorReumatoide" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaObservacionesFactorReumatoide">Observaciones:</label>
              <textarea name="cajaObservacionesFactorReumatoide" id="cajaObservacionesFactorReumatoide" class="form-control" rows="3"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarFactorReumatoide()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarFactorReumatoide() {
    let estudio = {
      idmodal: 'factorreumatoide',
      nombre: 'Factor reumatoide',
      resultados: [
        {
          nombre: 'Factor reumatoide',
          resultado: cajaResultadoFactorReumatoide.value,
          limites: []
        }
      ],
      observaciones: cajaObservacionesFactorReumatoide.value,
      costo: <?php if ($respuesta) {
                echo $respuesta["costo"];
              } else {
                echo "0";
              } ?>
    }

    agregarEstudio(estudio);
    cerrarModalFactorReumatoide();
    limpiarFactorReumatoide();
  }

  function cerrarModalFactorReumatoide() {
    $(`#factorreumatoide`).modal('toggle');
  }

  function limpiarFactorReumatoide() {
    cajaResultadoFactorReumatoide.value = '';
    cajaObservacionesFactorReumatoide.value = '';
  }

  $('#factorreumatoide').on('hidden.bs.modal', function (e) {
    limpiarFactorReumatoide();
  });

  $('#factorreumatoide').on('show.bs.modal', function (e) {
    if (editando === true) {
      edicionFactorReumatoide(estudioEditar);
    }
  });

  function edicionFactorReumatoide(estudio) {
    cajaResultadoFactorReumatoide.value = estudio.resultados[0].resultado;
    cajaObservacionesFactorReumatoide.value = estudio.observaciones;
  }
</script>
