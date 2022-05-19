<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Urocultivo");
?>
<div class="modal fade" id="urocultivo" tabindex="-1" role="dialog" aria-labelledby="urocultivo" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Urocultivo</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row text-center">
		        	<div class="col-md-8 mx-auto">
                        <form id="radiosU">
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
                                            <input class="form-check-input position-static" type="radio" id="radioAmpicilinaSensibleU" name="ampicilinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioAmpicilinaResistenteU" name="ampicilinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioCefalotinaSensibleU" name="cefalotinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefalotinaResistenteU" name="cefalotinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioCefotaximaSensibleU" name="cefotaximaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefotaximaResistenteU" name="cefotaximaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioCeftazidimaSensibleU" name="ceftazidimaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCeftazidimaResistenteU" name="ceftazidimaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioCefuroximaSensibleU" name="cefuroximaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioCefuroximaResistenteU" name="cefuroximaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioDicloxacilinaSensibleU" name="dicloxacilinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioDicloxacilinaResistenteU" name="dicloxacilinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioEritromicinaSensibleU" name="eritromicinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioEritromicinaResistenteU" name="eritromicinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioGentamicinaSensibleU" name="gentamicinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioGentamicinaResistenteU" name="gentamicinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioPefloxacinaSensibleU" name="pefloxacinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioPefloxacinaResistenteU" name="pefloxacinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioPenicilinaSensibleU" name="penicilinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioPenicilinaResistenteU" name="penicilinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioTetraciclinaSensibleU" name="tetraciclinaU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioTetraciclinaResistenteU" name="tetraciclinaU" value="Resistente">
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
                                            <input class="form-check-input position-static" type="radio" id="radioTrimetroprimaSulfametoxazolSensibleU" name="trimetroprimasulfametoxazolU" value="Sensible" checked>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-center">
                                            <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" id="radioTrimetroprimaSulfametoxazolResistenteU" name="trimetroprimasulfametoxazolU" value="Resistente">
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
	        	<button type="button" class="btn btn-primary" onclick="validarUrocultivo()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>
	
    const formaRadiosU = document.getElementById('radiosU');

	function validarUrocultivo() {
		/* if (formaRadiosU.elements["ampicilinaU"].value && formaRadiosU.elements["cefalotinaU"].value && 
        formaRadiosU.elements["cefotaximaU"].value && formaRadiosU.elements["ceftazidimaU"].value && 
        formaRadiosU.elements["cefuroximaU"].value && formaRadiosU.elements["dicloxacilinaU"].value && 
        formaRadiosU.elements["eritromicinaU"].value && formaRadiosU.elements["gentamicinaU"].value && 
        formaRadiosU.elements["pefloxacinaU"].value && formaRadiosU.elements["penicilinaU"].value && 
        formaRadiosU.elements["tetraciclinaU"].value && formaRadiosU.elements["trimetroprimasulfametoxazolU"].value) { */

			let estudio = {
				idmodal: 'urocultivo',
				nombre: 'Urocultivo',
				resultados: 
				[{
					nombre: 'Ampicilina',
					resultado: formaRadiosU.elements["ampicilinaU"].value,
					limites: []
				},
                {
					nombre: 'Cefalotina',
					resultado: formaRadiosU.elements["cefalotinaU"].value,
					limites: []
				},
                {
					nombre: 'Cefotaxima',
					resultado: formaRadiosU.elements["cefotaximaU"].value,
					limites: []
				},
                {
					nombre: 'Ceftazidima',
					resultado: formaRadiosU.elements["ceftazidimaU"].value,
					limites: []
				},
                {
					nombre: 'Cefuroxima',
					resultado: formaRadiosU.elements["cefuroximaU"].value,
					limites: []
				},
                {
					nombre: 'Dicloxacilina',
					resultado: formaRadiosU.elements["dicloxacilinaU"].value,
					limites: []
				},
                {
					nombre: 'Eritromicina',
					resultado: formaRadiosU.elements["eritromicinaU"].value,
					limites: []
				},
                {
					nombre: 'Gentamicina',
					resultado: formaRadiosU.elements["gentamicinaU"].value,
					limites: []
				},
                {
					nombre: 'Pefloxacina',
					resultado: formaRadiosU.elements["pefloxacinaU"].value,
					limites: []
				},
                {
					nombre: 'Penicilina',
					resultado: formaRadiosU.elements["penicilinaU"].value,
					limites: []
				},
                {
					nombre: 'Tetraciclina',
					resultado: formaRadiosU.elements["tetraciclinaU"].value,
					limites: []
				},
                {
					nombre: 'Trimetroprimasulfametoxazol',
					resultado: formaRadiosU.elements["trimetroprimasulfametoxazolU"].value,
					limites: []
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?>
			}

			agregarEstudio(estudio);
			cerrarModalUrocultivo();
			limpiarUrocultivo();

		/* } else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		} */
	}

	function cerrarModalUrocultivo() {
		$(`#urocultivo`).modal('toggle');
	}

	function limpiarUrocultivo() {
        document.getElementsByName('ampicilinaU')[0].checked = true;
        document.getElementsByName('ampicilinaU')[1].checked = false;
        document.getElementsByName('cefalotinaU')[0].checked = true;
        document.getElementsByName('cefalotinaU')[1].checked = false;
        document.getElementsByName('cefotaximaU')[0].checked = true;
        document.getElementsByName('cefotaximaU')[1].checked = false;
        document.getElementsByName('ceftazidimaU')[0].checked = true;
        document.getElementsByName('ceftazidimaU')[1].checked = false;
        document.getElementsByName('cefuroximaU')[0].checked = true;
        document.getElementsByName('cefuroximaU')[1].checked = false;
        document.getElementsByName('dicloxacilinaU')[0].checked = true;
        document.getElementsByName('dicloxacilinaU')[1].checked = false;
        document.getElementsByName('eritromicinaU')[0].checked = true;
        document.getElementsByName('eritromicinaU')[1].checked = false;
        document.getElementsByName('gentamicinaU')[0].checked = true;
        document.getElementsByName('gentamicinaU')[1].checked = false;
        document.getElementsByName('pefloxacinaU')[0].checked = true;
        document.getElementsByName('pefloxacinaU')[1].checked = false;
        document.getElementsByName('penicilinaU')[0].checked = true;
        document.getElementsByName('penicilinaU')[1].checked = false;
        document.getElementsByName('tetraciclinaU')[0].checked = true;
        document.getElementsByName('tetraciclinaU')[1].checked = false;
        document.getElementsByName('trimetroprimasulfametoxazolU')[0].checked = true;
        document.getElementsByName('trimetroprimasulfametoxazolU')[1].checked = false;
	}

	$('#urocultivo').on('hidden.bs.modal', function (e) {
        limpiarUrocultivo();
	});

	$('#urocultivo').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionUrocultivo(estudioEditar);
			 
		}
	});

	function edicionUrocultivo(estudio) {
        if (estudio.resultados[0].resultado === "Sensible") {
            document.getElementsByName('ampicilinaU')[0].checked = true;
        } else {
            document.getElementsByName('ampicilinaU')[1].checked = true;
        }

        if (estudio.resultados[1].resultado === "Sensible") {
            document.getElementsByName('cefalotinaU')[0].checked = true;
        } else {
            document.getElementsByName('cefalotinaU')[1].checked = true;
        }

        if (estudio.resultados[2].resultado === "Sensible") {
            document.getElementsByName('cefotaximaU')[0].checked = true;
        } else {
            document.getElementsByName('cefotaximaU')[1].checked = true;
        }

        if (estudio.resultados[3].resultado === "Sensible") {
            document.getElementsByName('ceftazidimaU')[0].checked = true;
        } else {
            document.getElementsByName('ceftazidimaU')[1].checked = true;
        }

        if (estudio.resultados[4].resultado === "Sensible") {
            document.getElementsByName('cefuroximaU')[0].checked = true;
        } else {
            document.getElementsByName('cefuroximaU')[1].checked = true;
        }

        if (estudio.resultados[5].resultado === "Sensible") {
            document.getElementsByName('dicloxacilinaU')[0].checked = true;
        } else {
            document.getElementsByName('dicloxacilinaU')[1].checked = true;
        }

        if (estudio.resultados[6].resultado === "Sensible") {
            document.getElementsByName('eritromicinaU')[0].checked = true;
        } else {
            document.getElementsByName('eritromicinaU')[1].checked = true;
        }

        if (estudio.resultados[7].resultado === "Sensible") {
            document.getElementsByName('gentamicinaU')[0].checked = true;
        } else {
            document.getElementsByName('gentamicinaU')[1].checked = true;
        }

        if (estudio.resultados[8].resultado === "Sensible") {
            document.getElementsByName('pefloxacinaU')[0].checked = true;
        } else {
            document.getElementsByName('pefloxacinaU')[1].checked = true;
        }

        if (estudio.resultados[9].resultado === "Sensible") {
            document.getElementsByName('penicilinaU')[0].checked = true;
        } else {
            document.getElementsByName('penicilinaU')[1].checked = true;
        }

        if (estudio.resultados[10].resultado === "Sensible") {
            document.getElementsByName('tetraciclinaU')[0].checked = true;
        } else {
            document.getElementsByName('tetraciclinaU')[1].checked = true;
        }

        if (estudio.resultados[11].resultado === "Sensible") {
            document.getElementsByName('trimetroprimasulfametoxazolU')[0].checked = true;
        } else {
            document.getElementsByName('trimetroprimasulfametoxazolU')[1].checked = true;
        }
	}

</script>