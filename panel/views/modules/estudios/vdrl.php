<?php
  $controller = new Controller();
  $respuesta = $controller -> ctlBuscarEstudio("VDRL");
?>
<div class="modal fade" id="vdrl" tabindex="-1" role="dialog" aria-labelledby="hiv" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="modal">VDRL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="cajaResultadoVDRL">Resultado:</label>
              <input class="form-control" type="text" name="cajaResultadoVDRL" id="cajaResultadoVDRL" value="Negativo" required>
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
        <button type="button" class="btn btn-primary" onclick="validarVDRL()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validarVDRL() {
    if (cajaResultadoVDRL.value) {
      let estudio = {
        idmodal: 'vdrl',
        nombre: 'VDRL',
        resultados: [{
          nombre: 'VDRL',
          resultado: cajaResultadoVDRL.value,
          limites: ['Negativo']
        }],
        observaciones: '',
        costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
      }

      agregarEstudio(estudio);
      cerrarModalVDRL();
      limpiarVDRL();
    }
  }

  function cerrarModalVDRL() {
    $(`#vdrl`).modal('toggle');
  }

  function limpiarVDRL() {
    cajaResultadoVDRL.value = '';
  }

  $('#vdrl').on('hidden.bs.modal', (event) => {
    limpiarVDRL();
  });

  $('#vdrl').on('show.bs.modal', (event) => {
    if (editando === true) {
      edicionVDRL(estudioEditar);
    }
  });

  function edicionVDRL(estudio) {
    cajaResultadoVDRL.value = estudio.resultados[0].resultado;
  }

</script>