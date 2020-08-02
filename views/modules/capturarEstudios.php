<?php  

?>
<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de estudios</li>
		</ol>

		<div class="row">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="selectCliente">Cliente:</label>
                                            <select class="form-control"  name="selectCliente" id="selectCliente">
                                                <option>Seleccione</option>
                                                <?php
                                                    $clientes = new Controller();
                                                    $clientes -> ctlBuscaClientes();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cajaNombres">Nombres:</label>
                                            <input class="form-control" type="text" id="cajaNombres" name="cajaNombres">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cajaApellidos">Apellidos:</label>
                                            <input class="form-control" type="text" id="cajaApellidos" name="cajaApellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cajaEmail">Correo electrónico</label>
                                            <input class="form-control" type="text" name="cajaEmail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="selectEstudios">Estudios:</label>
                                            <select class="form-control" name="selectEstudios" id="selectEstudios">
                                                <option>Seleccione</option>
                                                <?php 
                                                    $estudios = new Controller();
                                                    $estudios -> ctlBuscaEstudios();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary" onclick="botonPresionado()" id="botonAgregarEstudio" data-toggle="modal" data-target="#exampleModal">Agregar estudio</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="lista" id="lista" class="list-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Total</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 id="costo">$0.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

<script type="text/javascript">


    const selectEstudios = document.getElementById('selectEstudios');
    let lista = document.getElementById('lista');

    let estudios = [];

    function abrirEstudio(estudio) {
        $(`#${estudio}`).modal('toggle');
    }

    function botonPresionado () {
        if (selectEstudios.value === "Seleccione") {
            Swal.fire({
                title: "¡Seleccione un estudio!",
                type: "error",
                showCancelButton: false
            }).then((value) => {
                
            });
        } else {
            let modal = selectEstudios.value.toLowerCase();
            modal = modal.replace(/ /ig, '');
            console.log(modal);
            abrirEstudio(modal);
        }
    }

    function visualizarEstudios() {
        lista.innerHTML = "";
        let cosas = '';

        let i = 0;
        estudios.forEach( estudio => {
            cosas += `<div class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                ${estudio.nombre}
                            </div>
                            <div class="col-2">
                                <button class="btn hover">
                                    <i class="fas fa-pencil-alt" style="color: #007BFF;"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <button class="btn hover" onclick="borrarEstudio(${i})">
                                    <i class="fas fa-trash" style="color: #DC3545;"></i>
                                </button>
                            </div>
                        </div>
                      </div>`;
            i++
        });

        lista.innerHTML = cosas;
        calcularCostos();
    }

    function calcularCostos() {
        let total = 0;
    
        estudios.forEach(estudio => {
            total += estudio.costo;
        });

        let costo = document.getElementById('costo');

        costo.innerHTML = `$${total}`;
    }


    function agregarEstudio(estudio) {
        console.log(estudio);
        estudios.push(estudio);
        console.log(estudios);
        

        visualizarEstudios();
    }


    function borrarEstudio(index) {
        estudios.splice(index, 1);

        visualizarEstudios();
    }

    

</script>

