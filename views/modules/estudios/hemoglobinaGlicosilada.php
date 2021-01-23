<?php
  $controller = new Controller();
  $respuesta = $controller -> ctlBuscarEstudio("Hemoglobina glicosilada");
?>
<div class="modal fade" id="hemoglobinaglicosilada" tabindex="-1" role="dialog" aria-labelledby="hemoglobinaglicosilada" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">Hemoglobina glicosilada</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoHGBA1C">HGBA1C:</label>
              <input class="form-control" type="text" name="cajaResultadoHGBA1C" id="cajaResultadoHGBA1C" required>
            </div>
          </div>
          <div class="col-md-3">
            <br>
            <p class="mt-3">%</p>
          </div>
          <div class="col-md-3">
            <p>Límites de referencia</p>
            <p>6% - 8%</p>
            <p>Referencias en diabéticos</p>
            <p>Control bueno: 7.5% - 9%</p>
            <p>Control regular: 9% - 10%</p>
            <p>Control pobre: > 10%</p>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarHemoglobinaGlicosilada()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarHemoglobinaGlicosilada() {
    if (cajaResultadoHGBA1C.value) {
      let estudio = {
        idmodal: 'hemoglobinaglicosilada',
        nombre: 'Hemoglobina glicosilada',
        resultados: [{
          nombre: 'HGBA1C',
          resultado: cajaResultadoHGBA1C.value,
          limites: ['6% - 8%', 'Referencias en diabéticos', 'Control bueno: 7.5% - 9%', 'Control regular: 9% - 10%', 'Control pobre: > 10%']
        }],
        observaciones: '',
        costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo '0'; }?>
      }

      agregarEstudio(estudio);
      cerrarModalHemoglobinaGlicosilada();
      limpiarHemoglobinaGlicosilada();
    }
  }

  function cerrarModalHemoglobinaGlicosilada() {
    $(`#hemoglobinaglicosilada`).modal('toggle');
  }

  function limpiarHemoglobinaGlicosilada() {
    cajaResultadoHGBA1C.value = '';
  }

  $('#hemoglobinaglicosilada').on('hidden.bs.modal', function (event) {
    limpiarHemoglobinaGlicosilada();
  });

  $('#hemoglobinaglicosilada').on('show.bs.modal', function (event) {
    if (editando === true) {
      edicionHemoglobinaGlicosilada(estudioEditar);
    }
  });

  function edicionHemoglobinaGlicosilada(estudio) {
    cajaResultadoHGBA1C.value = estudio.resultados[0].resultado;
  }

</script>