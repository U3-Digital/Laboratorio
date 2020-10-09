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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cajaParametros">Parámetros:</label>
                            <textarea class="form-control" name="cajaParametros" id="cajaParametros" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cajaResultados">Resultados:</label>
                            <textarea class="form-control" name="cajaResultados" id="cajaResultados" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cajaLimites">Límites:</label>
                            <textarea class="form-control" name="cajaLimites" id="cajaLimites" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            <label for="cajaParametro">Parámetro:</label>
                            <input class="form-control" type="text" name="cajaParametro" id="cajaParametro">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cajaResultado">Resultado:</label>
                            <input class="form-control" type="text" name="cajaResultado" id="cajaResultado">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cajaLimites">Límites:</label>
                            <input class="form-control" type="text" name="cajaLimites" id="cajaLimites">
                        </div>
                    </div>
                    <div class="col-md-2 align-self-center">
                        <i class="fas fa-plus borde" style="margin-top: 1em; width: 100%;"></i>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group" style="height: 10em; overflow: auto;">
                            <!-- <li class="list-group-item">ejemplo</li>
                            <li class="list-group-item">ejemplo</li>
                            <li class="list-group-item">ejemplo</li> -->
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
        
        if (cajaNombreEstudio.value && cajaParametros.value && cajaResultados.value) {

            const parametros = cajaParametros.value.split('\n');
            const resultados = cajaResultados.value.split('\n');
            const limitesa = cajaLimites.value.split('\n');

            console.log(limitesa);

            if (parametros.length === resultados.length) {

                if (parametros.length === limitesa.length) {
                    const objetosResultado = [];
                    console.log('asdas');
                    let i = 0;
                    parametros.forEach((parametro) => {
                        objetosResultado.push({
                            nombre: parametro,
                            resultado: resultados[i],
                            limites: limitesa[i].split(',')
                        });
                        i++;
                    });

                    console.log(objetosResultado);

                    let estudio = {
                    idmodal: 'estudioenblanco',
                    nombre: cajaNombreEstudio.value,
                    resultados: objetosResultado,
                    observaciones: '',
                    costo: 0
                    }
                    agregarEstudio(estudio);
                    cerrarEstudioEnBlanco();
                    limpiarEstudioEnBlanco();
                } else {
                    Swal.fire({
                        title: "El número de parámetros y límites no coincide",
                        text: "Intente dar enter para igualar el número de parámetros con el de límites",
                        type: "error",
                        showCancelButton: false
                    });
                }
            } else {
                Swal.fire({
                    title: "El número de parámetros y resultados no coincide",
                    type: "error",
                    showCancelButton: false
                });
            }
        } else {
			Swal.fire({
                title: "Rellene todos los campos solicitados",
                type: "error",
                showCancelButton: false
            });
		}
    }

    function cerrarEstudioEnBlanco() {
        $(`#estudioenblanco`).modal('toggle');
        limpiarEstudioEnBlanco();
    }

    function limpiarEstudioEnBlanco() {
        cajaNombreEstudio.value = '';
        cajaParametros.value = '';
        cajaResultados.value = '';
        cajaLimites.value = '';
    }

    $('#estudioenblanco').on('hidden.bs.modal', function(e) {
        limpiarEstudioEnBlanco();
        console.log('je');
    });

    $('#estudioenblanco').on('show.bs.modal', function(e) {
        if (editando === true) {
            edicionEstudioEnBlanco(estudioEditar);
        }
    });

    function edicionEstudioEnBlanco(estudio) {
        cajaNombreEstudio.value = estudio.nombre;
        estudio.resultados.forEach((resultado) => {
            cajaParametros.value += `${resultado.nombre}\n`;
            cajaResultados.value += `${resultado.resultado}\n`;
            
            resultado.limites.forEach((limite) => {
                cajaLimites.value += `${limite}, `;
            });
            cajaLimites.value += '\n';
        });
    }
</script>