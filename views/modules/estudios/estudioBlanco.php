<div class="modal fade" id="estudioenblanco" tabindex="-1" role="dialog" aria-labelledby="estudioenblanco" aria-hidden="true">
    <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
        <div class="modal-content custom-modal">
            <div class="modal-header custom-modal">
                <h5 class="modal-title" id="modal">Estudio en blanco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <label for="cajaNombreEstudio">Nombre del estudio:</label>
                        <div class="input-group">
                            
                            <input class="form-control" type="text" name="cajaNombreEstudio" id="cajaNombreEstudio">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cajaParametro">Parámetro:</label>
                            <input class="form-control" type="text" name="cajaParametro" id="cajaParametro">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cajaResultado">Resultado:</label>
                            <input class="form-control" type="text" name="cajaResultado" id="cajaResultado">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group" style="height: 10em; overflow: auto;">
                            <li class="list-group-item">ejemplo</li>
                            <li class="list-group-item">ejemplo</li>
                            <li class="list-group-item">ejemplo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer custom-modal">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="validarEstudioEnBlanco()">Agregar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function validarEstudioEnBlanco() {
        /* if (cajaResultadoAmibaEnFresco.value) { */

        let estudio = {
            idmodal: 'estudioenblanco',
            nombre: '',
            resultados: [{
                nombre: 'Amiba en fresco',
                resultado: cajaResultadoAmibaEnFresco.value,
                limites: []
            }],
            observaciones: cajaObservacionesAmibaEnFresco.value,
            costo: <?php if ($respuesta) {
                        echo $respuesta["costo"];
                    } else {
                        echo "0";
                    } ?>
        }
        agregarEstudio(estudio);
        cerrarEstudioEnBlanco();
        limpiarEstudioEnBlanco();

        /* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
    }

    function cerrarEstudioEnBlanco() {
        $(`#estudioenblanco`).modal('toggle');
    }

    function limpiarEstudioEnBlanco() {
        
    }

    $('#estudioenblanco').on('hidden.bs.modal', function(e) {
        limpiarEstudioEnBlanco();
    });

    $('#estudioenblanco').on('show.bs.modal', function(e) {
        if (editando === true) {
            edicionEstudioEnBlanco(estudioEditar);

        }
    });

    function edicionEstudioEnBlanco(estudio) {
        
    }
</script>