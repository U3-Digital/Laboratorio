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
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="selectCliente">Cliente:</label>
                                                    <select class="form-control"  name="selectCliente" onchange="cambioCliente()" id="selectCliente">
                                                        <option value="">Seleccione</option>
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
                                                    <input class="form-control" type="text" id="cajaEmail" name="cajaEmail">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="selectDoctor">Doctor:</label>
                                                    <select class="form-control"  name="selectDoctor" onchange="cambioDoctor()" id="selectDoctor">
                                                        <option value="">Seleccione</option>
                                                        <?php
                                                            $clientes = new Controller();
                                                            $clientes -> ctlBuscaMedicos();
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cajaNombresDoctor">Nombres:</label>
                                                    <input class="form-control" type="text" id="cajaNombresDoctor" name="cajaNombresDoctor">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cajaApellidosDoctor">Apellidos:</label>
                                                    <input class="form-control" type="text" id="cajaApellidosDoctor" name="cajaApellidosDoctor">
                                                </div>
                                            </div>
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
                                        <button class="btn btn-secondary" onclick="limpiarFormulario()" id="botonLimiparFormulario" >
                                            <i class="fas fa-redo-alt"></i>
                                            Limpiar Formulario</button>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" onclick="ImprimirEstudios()" class="btn btn-secondary btn-block btn-lg">
                                            <i class="fas fa-print" style="margin-right: 0.5em;"></i>
                                            Imprimir estudio
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-secondary btn-block btn-lg">
                                            <i class="fas fa-envelope" style="margin-right: 0.5em;"></i>
                                            Enviar y terminar
                                        </button>
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

<?php
    function buscarcliente($variable){
        $clienteconsulta = new Controller();
        $clienteconsulta -> ctlBuscaCliente(1);
        print_r($clienteconsulta);
        echo $clienteconsulta;
        return $clienteconsulta;
    }
  ?>

<script type="text/javascript">


    const selectEstudios = document.getElementById('selectEstudios');
    let lista = document.getElementById('lista');

    let estudios = [];

    const cajaNombreCliente = document.getElementById('cajaNombres');
    const cajaApellidosCliente = document.getElementById('cajaApellidos');
    const cajaEmailCliente = document.getElementById('cajaEmail');
    const selectCliente = document.getElementById('selectCliente');

    const selectDoctor = document.getElementById('selectDoctor');
    const cajanombreDoctor = document.getElementById('cajaNombresDoctor');
    const cajaApellidosDoctor = document.getElementById('cajaApellidosDoctor');

    function cambioCliente(){
        if(selectCliente.value == ""){
            cajaNombreCliente.value = "";
            cajaApellidosCliente.value = "";
            cajaEmailCliente.value = ""; 
        } else{
           $.ajax({
            url: './ajax/getCliente.php',
            type: "GET",
            data: `idCliente= ${selectCliente.value}`,
            success: function(data) {
                const datos = JSON.parse(data);
                cajaNombreCliente.value = datos[0].nombre;
                cajaApellidosCliente.value = datos[0].apellidos;
                cajaEmailCliente.value = datos[0].email;
                //console.log(datos[0]);

            },
            error: function(data) {
                console.log(data);
            },
            complete: function() {

            },
            cache: false,
            contentType: false,
            processData: false
        });
 
        }
    }

    function limpiarFormulario(){
        cajaNombreCliente.value = "";
        cajaApellidosCliente.value = "";
        cajaEmailCliente.value =  "";
        cajaNombresDoctor.value = "";
        cajaApellidosDoctor.value = "";
        selectDoctor.value = "";
        selectCliente.value = "";

        lista.innerHTML= "";
        estudios = [];
        calcularCostos();
    }

    function ImprimirEstudios(){

        var myWindow = window.open("", "MsgWindow", "width=500,height=1000");
        myWindow.document.write( `<style>@media screen {
  div.divFooter {
    display: none;
  }
}
@media print {
  div.divFooter {
    position: fixed;
    bottom: 0;
    background-color: red;
    width: 325px;
  }
}
</style>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br>Hola<br><br><div class="divFooter">Este es el footer<div>`);
        //console.log(estudios);
        myWindow.print();
    }

    function cambioDoctor () {
        if(selectDoctor.value == ""){
            cajanombreDoctor.value = "";
            cajaApellidosDoctor.value = "";
        } else{
           $.ajax({
            url: './ajax/getDoctor.php',
            type: "GET",
            data: `idMedico= ${selectDoctor.value}`,
            success: function(data) {
                const datos = JSON.parse(data);
                cajaNombresDoctor.value = datos.nombre;
                cajaApellidosDoctor.value = datos.apellidos;
                //console.log(datos[0]);

            },
            error: function(data) {
                console.log(data);
            },
            complete: function() {

            },
            cache: false,
            contentType: false,
            processData: false
        });
 
        }    
    }

    function abrirEstudio(estudio) {
        $(`#${estudio}`).modal('toggle');
    }

    function botonPresionado () {
        if (selectEstudios.value === "Seleccione") {
            Swal.fire({
                title: "¡Seleccione un estudio!",
                type: "warning",
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

