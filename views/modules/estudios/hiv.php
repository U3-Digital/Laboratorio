<?php
  $controller = new Controller();
  $respuesta = $controller->ctlBuscarEstudio("HIV");
?>
<div class="modal fade" id="hiv" tabindex="-1" role="dialog" aria-labelledby="hiv" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">HIV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoHIV">Resultado:</label>
              <input class="form-control" type="text" name="cajaResultadoHIV" id="cajaResultadoHIV" value="Negativo" required>
            </div>
          </div>
          <div class="col-md-6">
            <p>Límites de referencia</p>
            <p>Negativo</p>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarHIV()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarHIV() {
    if (cajaResultadoHIV.value) {
      let estudio = {
        idmodal: 'hiv',
        nombre: 'HIV',
        resultados: [{
          nombre: 'HIV',
          resultado: cajaResultadoHIV.value,
          limites: ['Negativo']
        }],
        observaciones: '',
        costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
      }

      agregarEstudio(estudio);
      cerrarModalHIV();
      limpiarHIV();
    }
  }

  function cerrarModalHIV() {
    $(`#hiv`).modal('toggle');
  }

  function limpiarHIV() {
    cajaResultadoHIV.value = '';
  }

  $('#hiv').on('hidden.bs.modal', (event) => {
    limpiarHIV();
  });

  $('#hiv').on('show.bs.modal', (event) => {
    if (editando === true) {
      edicionHIV(estudioEditar);
    }
  });

  function edicionHIV(estudio) {
    cajaResultadoHIV.value = estudio.resultados[0].resultado;
  }

</script>