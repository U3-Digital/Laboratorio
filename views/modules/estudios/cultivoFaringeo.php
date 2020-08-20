<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Cultivo faringeo");
?>
<div class="modal fade" id="cultivofaringeo" tabindex="-1" role="dialog" aria-labelledby="cultivofaringeo" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Cultivo faríngeo</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row text-center">
                    <div class="col-md-8 mx-auto">
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
                                            (AM) Ampicilina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioAmpicilinaSensible" name="ampicilina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioAmpicilinaResistente" name="ampicilina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (CF) Cefalotina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefalotinaSensible" name="cefalotina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefalotinaResistente" name="cefalotina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (CTX) Cefotaxima
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefotaximaSensible" name="cefotaxima" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefotaximaResistente" name="cefotaxima" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (CAZ) Ceftazidima
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCeftazidimaSensible" name="ceftazidima" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCeftazidimaResistente" name="ceftazidima" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (CXM) Cefuroxima
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefuroximaSensible" name="cefuroxima" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefuroximaResistente" name="cefuroxima" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (DC) Dicloxacilina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioDicloxacilinaSensible" name="dicloxacilina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioDicloxacilinaResistente" name="dicloxacilina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (E) Eritromicina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioEritromicinaSensible" name="eritromicina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioEritromicinaResistente" name="eritromicina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (GE) Gentamicina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioGentamicinaSensible" name="gentamicina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioGentamicinaResistente" name="gentamicina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (PEF) Pefloxacina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioPefloxacinaSensible" name="pefloxacina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioPefloxacinaResistente" name="pefloxacina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (PE) Penicilina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioPenicilinaSensible" name="penicilina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioPenicilinaResistente" name="penicilina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (TE) Tetraciclina
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioTetraciclinaSensible" name="tetraciclina" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioTetraciclinaResistente" name="tetraciclina" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>         
                                <div class="list-group-item list-group-item-action">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            (SXT) Trimetroprima sulfametoxazol
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioTrimetroprimaSulfametoxazolSensible" name="trimetroprimasulfametoxazol" value="sensible">
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioTrimetroprimaSulfametoxazolResistente" name="trimetroprimasulfametoxazol" value="resistente">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
       
		if (formaRadios.elements["ampicilina"].value && formaRadios.elements["cefalotina"].value && 
        formaRadios.elements["cefotaxima"].value && formaRadios.elements["ceftazidima"].value && 
        formaRadios.elements["cefuroxima"].value && formaRadios.elements["dicloxacilina"].value && 
        formaRadios.elements["eritromicina"].value && formaRadios.elements["gentamicina"].value && 
        formaRadios.elements["pefloxacina"].value && formaRadios.elements["penicilina"].value && 
        formaRadios.elements["tetraciclina"].value && formaRadios.elements["trimetroprimasulfametoxazol"].value) {

			let estudio = {
				idmodal: 'cultivofaringeo',
				nombre: 'Cultivo faríngeo',
				resultados: 
				[{
					nombre: 'Ampicilina',
					resultado: formaRadios.elements["ampicilina"].value,
					limites: []
				},
                {
					nombre: 'Cefalotina',
					resultado: formaRadios.elements["cefalotina"].value,
					limites: []
				},
                {
					nombre: 'Cefotaxima',
					resultado: formaRadios.elements["cefotaxima"].value,
					limites: []
				},
                {
					nombre: 'Ceftazidima',
					resultado: formaRadios.elements["ceftazidima"].value,
					limites: []
				},
                {
					nombre: 'Cefuroxima',
					resultado: formaRadios.elements["cefuroxima"].value,
					limites: []
				},
                {
					nombre: 'Dicloxacilina',
					resultado: formaRadios.elements["dicloxacilina"].value,
					limites: []
				},
                {
					nombre: 'Eritromicina',
					resultado: formaRadios.elements["eritromicina"].value,
					limites: []
				},
                {
					nombre: 'Gentamicina',
					resultado: formaRadios.elements["gentamicina"].value,
					limites: []
				},
                {
					nombre: 'Pefloxacina',
					resultado: formaRadios.elements["pefloxacina"].value,
					limites: []
				},
                {
					nombre: 'Penicilina',
					resultado: formaRadios.elements["penicilina"].value,
					limites: []
				},
                {
					nombre: 'Tetraciclina',
					resultado: formaRadios.elements["tetraciclina"].value,
					limites: []
				},
                {
					nombre: 'Trimetroprimasulfametoxazol',
					resultado: formaRadios.elements["trimetroprimasulfametoxazol"].value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarCultivoFaringeo();
			limpiarCultivoFaringeo();
			
		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarCultivoFaringeo() {
		$(`#cultivofaringeo`).modal('toggle');
	}

	function limpiarCultivoFaringeo() {
        document.getElementsByName('ampicilina')[0].checked = false;
        document.getElementsByName('ampicilina')[1].checked = false;
        document.getElementsByName('cefalotina')[0].checked = false;
        document.getElementsByName('cefalotina')[1].checked = false;
        document.getElementsByName('cefotaxima')[0].checked = false;
        document.getElementsByName('cefotaxima')[1].checked = false;
        document.getElementsByName('ceftazidima')[0].checked = false;
        document.getElementsByName('ceftazidima')[1].checked = false;
        document.getElementsByName('cefuroxima')[0].checked = false;
        document.getElementsByName('cefuroxima')[1].checked = false;
        document.getElementsByName('dicloxacilina')[0].checked = false;
        document.getElementsByName('dicloxacilina')[1].checked = false;
        document.getElementsByName('eritromicina')[0].checked = false;
        document.getElementsByName('eritromicina')[1].checked = false;
        document.getElementsByName('gentamicina')[0].checked = false;
        document.getElementsByName('gentamicina')[1].checked = false;
        document.getElementsByName('pefloxacina')[0].checked = false;
        document.getElementsByName('pefloxacina')[1].checked = false;
        document.getElementsByName('penicilina')[0].checked = false;
        document.getElementsByName('penicilina')[1].checked = false;
        document.getElementsByName('tetraciclina')[0].checked = false;
        document.getElementsByName('tetraciclina')[1].checked = false;
        document.getElementsByName('trimetroprimasulfametoxazol')[0].checked = false;
        document.getElementsByName('trimetroprimasulfametoxazol')[1].checked = false;
	}

	$('#cultivofaringeo').on('hidden.bs.modal', function (e) {
  		limpiarCultivoFaringeo();
    });
    
    $('#cultivofaringeo').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionCultivoFaringeo(estudioEditar);
			 
		}
	});

	function edicionCultivoFaringeo(estudio) {
		if (estudio.resultados[0].resultado === "sensible") {
            document.getElementsByName('ampicilina')[0].checked = true;
        } else {
            document.getElementsByName('ampicilina')[1].checked = true;
        }

        if (estudio.resultados[1].resultado === "sensible") {
            document.getElementsByName('cefalotina')[0].checked = true;
        } else {
            document.getElementsByName('cefalotina')[1].checked = true;
        }

        if (estudio.resultados[2].resultado === "sensible") {
            document.getElementsByName('cefotaxima')[0].checked = true;
        } else {
            document.getElementsByName('cefotaxima')[1].checked = true;
        }

        if (estudio.resultados[3].resultado === "sensible") {
            document.getElementsByName('ceftazidima')[0].checked = true;
        } else {
            document.getElementsByName('ceftazidima')[1].checked = true;
        }

        if (estudio.resultados[4].resultado === "sensible") {
            document.getElementsByName('cefuroxima')[0].checked = true;
        } else {
            document.getElementsByName('cefuroxima')[1].checked = true;
        }

        if (estudio.resultados[5].resultado === "sensible") {
            document.getElementsByName('dicloxacilina')[0].checked = true;
        } else {
            document.getElementsByName('dicloxacilina')[1].checked = true;
        }

        if (estudio.resultados[6].resultado === "sensible") {
            document.getElementsByName('eritromicina')[0].checked = true;
        } else {
            document.getElementsByName('eritromicina')[1].checked = true;
        }

        if (estudio.resultados[7].resultado === "sensible") {
            document.getElementsByName('gentamicina')[0].checked = true;
        } else {
            document.getElementsByName('gentamicina')[1].checked = true;
        }

        if (estudio.resultados[8].resultado === "sensible") {
            document.getElementsByName('pefloxacina')[0].checked = true;
        } else {
            document.getElementsByName('pefloxacina')[1].checked = true;
        }

        if (estudio.resultados[9].resultado === "sensible") {
            document.getElementsByName('penicilina')[0].checked = true;
        } else {
            document.getElementsByName('penicilina')[1].checked = true;
        }

        if (estudio.resultados[10].resultado === "sensible") {
            document.getElementsByName('tetraciclina')[0].checked = true;
        } else {
            document.getElementsByName('tetraciclina')[1].checked = true;
        }

        if (estudio.resultados[11].resultado === "sensible") {
            document.getElementsByName('trimetroprimasulfametoxazol')[0].checked = true;
        } else {
            document.getElementsByName('trimetroprimasulfametoxazol')[1].checked = true;
        }
	}


</script>