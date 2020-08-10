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
                                        <button type="button" onclick="CapturarEstudios()" class="btn btn-secondary btn-block btn-lg">
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

    let total= 0;

    const selectEstudios = document.getElementById('selectEstudios');
    let lista = document.getElementById('lista');

    let estudios = [];
    let editando = false;
    let estudioEditar = {};

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

    function CapturarEstudios(){


        //console.log(estudios);
        const parsedEstudios = JSON.stringify(estudios);
        const fechaHoy = new Date(Date.now());
        const formated_Date = fechaHoy.getFullYear()+"-"+fechaHoy.getMonth()+"-"+fechaHoy.getDate();

        if(cajaNombreCliente.value == ""  || cajaEmailCliente.value =="" || cajaNombresDoctor.value ==="" || cajaApellidosDoctor.value === "" || estudios.length == 0){
            Swal.fire({
                title: "¡Rellene por completo el formulario!",
                type: "warning",
                showCancelButton: false
            }).then((value) => {
                
            });    
        }else{
            $.ajax({
                url: './ajax/saveFile.php',
                type: "POST",
                data: function(){
                    let valores = new FormData();
                    valores.append("cliente",cajaNombreCliente.value+" "+cajaApellidosCliente.value);
                    valores.append("medico",cajaNombresDoctor.value+" "+cajaApellidosDoctor.value);
                    valores.append("fecha", formated_Date);
                    valores.append("costo", total);
                    valores.append("responsable",<?php echo("'".$_SESSION["nombre"]."'") ?>);
                    valores.append("resultado", parsedEstudios);
                    return valores;
                }(),
                success: function(data) {
                    if(data === "success"){
                        Swal.fire({
                            title: "Datos Guardados!",
                            type: "success",
                            showCancelButton: false
                        }).then((value) => {
                            if (value) {
                                window.location.href = "inicio.php?action=verEstudios";
                            } 
                        }); 

                    }else{
                        Swal.fire({
                            title: "¡Hubo un error!",
                            type: "warning",
                            showCancelButton: false
                        }).then((value) => {
                              
                        });
                    }
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

    function ImprimirEstudios(){

        var myWindow =window.open("", "MsgWindow", "width=2500,height=1000");
        myWindow.document.write( `
        <style>
        * {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        @media screen {
          div.divFooter {
            display: none;
          }

          div.divHeader {
            display: none;
          }
        }
        @media print {
        @page { margin: 2mm; }

        body { margin: 1.6cm; }


        .header, .footer {
          height: 5%;
        }


        .header-space, .footer-space{
            height: 0%
        }
        .divCompletar{
            height : 90%;
        }

        .header {
          position: fixed;
          top: 0;
        }

        .footer {
          position: fixed;
          bottom: 0;
        }


        }

        </style>
        <table">
          <thead><tr><td>
            <div class="header-space">&nbsp;</div>
          </td></tr></thead>
          <tbody><tr><td>
            <div class="content">${escribirCuerpo()}</div>
          </td></tr></tbody>
          <tfoot><tr><td>
            <div class="footer-space">&nbsp;</div>
          </td></tr></tfoot>
        </table>
        <div class="header">Header</div>
        <div class="footer">Foter</div>

         `);
        //console.log(estudios);
        myWindow.print();
         myWindow.close();
    }
    function escribirCuerpo(){
        var texto = "";

        estudios.forEach(estudio =>{
            var textoResultados = ` <div class="divCompletar">`;
            estudio.resultados[0].limites.  length >0 ? (
                    textoResultados +="<h3>Resultados:</h3> <h3 style ='text-align: right;'>Limites</h3>"
                    ) :(
                    textoResultados +="<h3>Resultados:</h3>"
                    );
            estudio.resultados.forEach(resultado =>{
                
                textoResultados += `<strong>${resultado.nombre}: ${resultado.resultado}</strong><p>    ${resultado.limites.length >0 ? (
                        resultado.limites[0]
                    ) :(
                        ""
                    )
                }<p><br>`;
                
            });
            //https://medium.com/@Idan_Co/the-ultimate-print-html-template-with-header-footer-568f415f6d2a
            /*texto +=`
                        <div class="divInfo">
                            <p><strong>Nombre:</strong> ${cajaNombreCliente.value} ${cajaApellidosCliente.value}</p>
                            <p><strong>Medico:</strong> ${cajaNombresDoctor.value} ${cajaApellidosDoctor.value}</h5>
                        </div>
                        <hr>`*/
            texto += `<h2>Estudio: ${estudio.nombre}</h2> <br>
             <p>${textoResultados}</p>

             </div>`
        });
        texto+="</div>";
        return(texto);
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
                                <button class="btn hover" onclick="editarEstudios(${i})">
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
        total = 0;
    
        estudios.forEach(estudio => {
            total += estudio.costo;
        });

        let costo = document.getElementById('costo');

        costo.innerHTML = `$${total}`;
    }


    function agregarEstudio(estudio) {
        console.log(estudio);
        estudios.push(estudio);
        // console.log(estudios);

        if (editando === true) {
            editando = false;
        } 

        visualizarEstudios();
    }


    function borrarEstudio(index) {
        estudios.splice(index, 1);

        visualizarEstudios();
    }

    function editarEstudios(index) { 
        editando = true;
        estudioEditar = estudios[index];
        abrirEstudio(estudioEditar.idmodal);
        borrarEstudio(index);
    }
    
</script>

