<?php
$controller = new Controller();
$respuesta = $controller->ctlBuscarEstudio("Cultivo faringeo");
?>
<div class="modal fade" id="cultivofaringeo" tabindex="-1" role="dialog" aria-labelledby="cultivofaringeo" aria-hidden="true">
  <div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
    <div class="modal-content custom-modal">
      <div class="modal-header custom-modal">
        <div class="row">
          <div class="col-md-4 align-self-center">
            <h5>Cultivo</h5>
          </div>
          <div class="col-md-8">
            <input type="text" name="cajaNombreCultivo" id="cajaNombreCultivo" class="form-control" value="faríngeo">
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <form id="radios">
              <div class="list-group">
                <div class="list-group-item list-group-item-action disabled">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      Antibiótico
                    </div>
                    <div class="col-3 align-self-center">
                      Sensible
                    </div>
                    <div class="col-3 align-self-center">
                      Resistente
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo1" id="cajaResultadoFaringeo1" class="form-control" value="(AM) Ampicilina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioAmpicilinaSensible" name="cf1" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioAmpicilinaResistente" name="cf1" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo2" id="cajaResultadoFaringeo2" class="form-control" value="(CF) Cefalotina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCefalotinaSensible" name="cf2" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCefalotinaResistente" name="cf2" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo3" id="cajaResultadoFaringeo3" class="form-control" value="(CTX) Cefotaxima">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCefotaximaSensible" name="cf3" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCefotaximaResistente" name="cf3" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo4" id="cajaResultadoFaringeo4" class="form-control" value="(CAZ) Ceftazidima">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCeftazidimaSensible" name="cf4" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCeftazidimaResistente" name="cf4" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo5" id="cajaResultadoFaringeo5" class="form-control" value="(CXM) Cefuroxima">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCefuroximaSensible" name="cf5" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioCefuroximaResistente" name="cf5" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo6" id="cajaResultadoFaringeo6" class="form-control" value="(DC) Dicloxacilina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioDicloxacilinaSensible" name="cf6" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioDicloxacilinaResistente" name="cf6" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo7" id="cajaResultadoFaringeo7" class="form-control" value="(E) Eritromicina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioEritromicinaSensible" name="cf7" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioEritromicinaResistente" name="cf7" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo8" id="cajaResultadoFaringeo8" class="form-control" value="(GE) Gentamicina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioGentamicinaSensible" name="cf8" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioGentamicinaResistente" name="cf8" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo9" id="cajaResultadoFaringeo9" class="form-control" value="(PEF) Pefloxacina">
                      
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioPefloxacinaSensible" name="cf9" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioPefloxacinaResistente" name="cf9" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo10" id="cajaResultadoFaringeo10" class="form-control" value="(PE) Penicilina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioPenicilinaSensible" name="cf10" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioPenicilinaResistente" name="cf10" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo11" id="cajaResultadoFaringeo11" class="form-control" value="(TE) Tetraciclina">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioTetraciclinaSensible" name="cf11" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioTetraciclinaResistente" name="cf11" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="row">
                    <div class="col-6 align-self-center">
                      <input type="text" name="cajaResultadoFaringeo11" id="cajaResultadoFaringeo12" class="form-control" value="(SXT) Trimetroprima sulfametoxazol">
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioTrimetroprimaSulfametoxazolSensible" name="cf12" value="Sensible" checked>
                      </div>
                    </div>
                    <div class="col-3 align-self-center">
                      <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="radioTrimetroprimaSulfametoxazolResistente" name="cf12" value="Resistente">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="cajaObservacionesCultivoFaringeo">Observaciones:</label>
              <textarea style="min-height: 10em;" name="cajaObservacionesCultivoFaringeo" id="cajaObservacionesCultivoFaringeo" class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer custom-modal">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="validarCultivoFaringeo()">Agregar</button>
      </div>
    </div>
  </div>
</div>

<script>
  let formaRadios = document.getElementById('radios');

  function validarCultivoFaringeo() {

    let estudio = {
      idmodal: 'cultivofaringeo',
      nombre: `Cultivo ${cajaNombreCultivo.value}`,
      resultados: [{
          nombre: `${cajaResultadoFaringeo1.value}`,
          resultado: formaRadios.elements["cf1"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo2.value}`,
          resultado: formaRadios.elements["cf2"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo3.value}`,
          resultado: formaRadios.elements["cf3"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo4.value}`,
          resultado: formaRadios.elements["cf4"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo5.value}`,
          resultado: formaRadios.elements["cf5"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo6.value}`,
          resultado: formaRadios.elements["cf6"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo7.value}`,
          resultado: formaRadios.elements["cf7"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo8.value}`,
          resultado: formaRadios.elements["cf8"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo9.value}`,
          resultado: formaRadios.elements["cf9"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo10.value}`,
          resultado: formaRadios.elements["cf10"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo11.value}`,
          resultado: formaRadios.elements["cf11"].value,
          limites: []
        },
        {
          nombre: `${cajaResultadoFaringeo12.value}`,
          resultado: formaRadios.elements["cf12"].value,
          limites: []
        }
      ],
      observaciones: cajaObservacionesCultivoFaringeo.value,
      costo: <?php if ($respuesta) {
                echo $respuesta["costo"];
              } else {
                echo "0";
              } ?>
    }

    agregarEstudio(estudio);
    cerrarCultivoFaringeo();
    limpiarCultivoFaringeo();

  }

  function cerrarCultivoFaringeo() {
    $(`#cultivofaringeo`).modal('toggle');
  }

  function limpiarCultivoFaringeo() {

    cajaNombreCultivo.value = 'faríngeo';

    document.getElementsByName('cf1')[0].checked = true;
    document.getElementsByName('cf1')[1].checked = false;

    document.getElementsByName('cf2')[0].checked = true;
    document.getElementsByName('cf2')[1].checked = false;

    document.getElementsByName('cf3')[0].checked = true;
    document.getElementsByName('cf3')[1].checked = false;

    document.getElementsByName('cf4')[0].checked = true;
    document.getElementsByName('cf4')[1].checked = false;

    document.getElementsByName('cf5')[0].checked = true;
    document.getElementsByName('cf5')[1].checked = false;

    document.getElementsByName('cf6')[0].checked = true;
    document.getElementsByName('cf6')[1].checked = false;

    document.getElementsByName('cf7')[0].checked = true;
    document.getElementsByName('cf7')[1].checked = false;

    document.getElementsByName('cf8')[0].checked = true;
    document.getElementsByName('cf8')[1].checked = false;

    document.getElementsByName('cf9')[0].checked = true;
    document.getElementsByName('cf9')[1].checked = false;

    document.getElementsByName('cf10')[0].checked = true;
    document.getElementsByName('cf10')[1].checked = false;

    document.getElementsByName('cf11')[0].checked = true;
    document.getElementsByName('cf11')[1].checked = false;

    document.getElementsByName('cf12')[0].checked = true;
    document.getElementsByName('cf12')[1].checked = false;
  }

  $('#cultivofaringeo').on('hidden.bs.modal', function(e) {
    limpiarCultivoFaringeo();
  });

  $('#cultivofaringeo').on('show.bs.modal', function(e) {
    if (editando === true) {
      edicionCultivoFaringeo(estudioEditar);

    }
  });

  function edicionCultivoFaringeo(estudio) {

    let nombreEstudio = estudio.nombre.split(' ');
    nombreEstudio.splice(0, 1);
    nombreEstudio = nombreEstudio.join(' ');

    cajaObservacionesCultivoFaringeo.value = estudio.observaciones;

    cajaNombreCultivo.value = nombreEstudio;

    cajaResultadoFaringeo1.value = estudio.resultados[0].nombre;

    if (estudio.resultados[0].resultado === "Sensible") {
      document.getElementsByName('cf1')[0].checked = true;
    } else {
      document.getElementsByName('cf1')[1].checked = true;
    }

    cajaResultadoFaringeo2.value = estudio.resultados[1].nombre;

    if (estudio.resultados[1].resultado === "Sensible") {
      document.getElementsByName('cf2')[0].checked = true;
    } else {
      document.getElementsByName('cf2')[1].checked = true;
    }

    cajaResultadoFaringeo3.value = estudio.resultados[2].nombre;

    if (estudio.resultados[2].resultado === "Sensible") {
      document.getElementsByName('cf3')[0].checked = true;
    } else {
      document.getElementsByName('cf3')[1].checked = true;
    }

    cajaResultadoFaringeo4.value = estudio.resultados[3].nombre;

    if (estudio.resultados[3].resultado === "Sensible") {
      document.getElementsByName('cf4')[0].checked = true;
    } else {
      document.getElementsByName('cf4')[1].checked = true;
    }

    cajaResultadoFaringeo5.value = estudio.resultados[4].nombre;


    if (estudio.resultados[4].resultado === "Sensible") {
      document.getElementsByName('cf5')[0].checked = true;
    } else {
      document.getElementsByName('cf5')[1].checked = true;
    }

    cajaResultadoFaringeo6.value = estudio.resultados[5].nombre;


    if (estudio.resultados[5].resultado === "Sensible") {
      document.getElementsByName('cf6')[0].checked = true;
    } else {
      document.getElementsByName('cf6')[1].checked = true;
    }

    cajaResultadoFaringeo7.value = estudio.resultados[6].nombre;

    if (estudio.resultados[6].resultado === "Sensible") {
      document.getElementsByName('cf7')[0].checked = true;
    } else {
      document.getElementsByName('cf7')[1].checked = true;
    }

    cajaResultadoFaringeo8.value = estudio.resultados[7].nombre;

    if (estudio.resultados[7].resultado === "Sensible") {
      document.getElementsByName('cf8')[0].checked = true;
    } else {
      document.getElementsByName('cf8')[1].checked = true;
    }

    cajaResultadoFaringeo9.value = estudio.resultados[8].nombre;

    if (estudio.resultados[8].resultado === "Sensible") {
      document.getElementsByName('cf9')[0].checked = true;
    } else {
      document.getElementsByName('cf9')[1].checked = true;
    }

    cajaResultadoFaringeo10.value = estudio.resultados[9].nombre;

    if (estudio.resultados[9].resultado === "Sensible") {
      document.getElementsByName('cf10')[0].checked = true;
    } else {
      document.getElementsByName('cf10')[1].checked = true;
    }

    cajaResultadoFaringeo11.value = estudio.resultados[10].nombre;

    if (estudio.resultados[10].resultado === "Sensible") {
      document.getElementsByName('cf11')[0].checked = true;
    } else {
      document.getElementsByName('cf11')[1].checked = true;
    }

    cajaResultadoFaringeo12.value = estudio.resultados[11].nombre;

    if (estudio.resultados[11].resultado === "Sensible") {
      document.getElementsByName('cf12')[0].checked = true;
    } else {
      document.getElementsByName('cf12')[1].checked = true;
    }
  }
</script>