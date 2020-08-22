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


<script type="text/javascript">

    let total= 0;
    let indexEditar = -1;

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
        const formated_Date = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+fechaHoy.getDate();

        if(cajaNombreCliente.value === ""  || cajaEmailCliente.value ==="" || cajaNombresDoctor.value ==="" || cajaApellidosDoctor.value === "" || estudios.length === 0){
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
                    valores.append("emailCliente",cajaEmailCliente);
                    valores.append("fecha", formated_Date);
                    valores.append("costo", total);
                    valores.append("responsable",<?php echo("'".$_SESSION["nombre"]."'") ?>);
                    valores.append("resultado", parsedEstudios);
                    return valores;
                }(),
                success: function(data) {
                    
                    $.ajax({
                        url: './ajax/mail.php',
                        type: "POST",
                        data: function(){
                            let valores = new FormData();
                            valores.append("cliente",cajaNombreCliente.value+" "+cajaApellidosCliente.value);
                            valores.append("medico",cajaNombresDoctor.value+" "+cajaApellidosDoctor.value);
                            valores.append("fecha", formated_Date);
                            valores.append("costo", total);
                            valores.append("responsable",<?php echo("'".$_SESSION["nombre"]."'") ?>);
                            valores.append("resultado", parsedEstudios);
                            valores.append("emailCliente", cajaEmailCliente.value);
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
                            console.log(data);

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

    async function ImprimirEstudios(){
        if (estudios.length === 0){
            Swal.fire({
                title: "¡Rellene por completo el formulario!",
                type: "warning",
                showCancelButton: false
            }).then((value) => {
                
            });
        }else{

        var myWindow = window.open('','','width=1500,height=1000');

        myWindow.document.write(`
            <style>
                * {
                    font-family: 'Arial', sans-serif;
                    font-size: 16px;
                }


                @media screen{
                    .header, .footer{
                        display: none;
                    }
                }
                @media print {
                    @page { margin: 2mm; }

                    body { margin: 1.6cm; }


                    .header, .footer {
                      height: 7%;
                    }


                    .header-space, .footer-space{
                        height: 50px;
                        width = 100%;
                    }
                    .divCompletar{
                        height : 90%;
                    }

                    .header {
                      position: fixed;
                      width = 100%;
                      top: 0;
                    }

                    .footer {
                      position: fixed;
                      width = 100%;
                      bottom: 0;
                    }
                }
            </style>
            ${escribirCuerpo()}
           

            

            <div class="header">
                <img src="../../Assets/encabezado.jpg" alt="Girl in a jacket" width=100% height="50px">
            </div>
            <div class="footer">
                <img src="../../Assets/piePagina.jpg" alt="Girl in a jacket" width=100% ">    
            </div>

            `);
        setTimeout(function() {
            myWindow.print();
            myWindow.close();
        }, 450);

       
        }// myWindow.close();
    }
    function escribirResultados(estudio){
        let resultados = "";

        estudio.resultados.forEach(resultado =>{

            resultados +=`
                
                    <span>${resultado.nombre}: ${resultado.resultado}</span>
                    ${ resultado.limites[0] ? (
                            `<span>Limites: ${resultado.limites[0]}</span>`
                        ) : (
                            "&nbsp;"
                        )}
                    </br> 

            `
        })
        return resultados;
        
    }
    function escribirCuerpo(){
        let texto = "";
        estudios.forEach(estudio =>{
            texto +=`

                     <table style="width: 100%">
                        <thead><tr><td>
                            <div class="header-space">&nbsp;</div>
                        </td></tr></thead>
                        <tbody><tr><td>
                            <div class="content" width=100%>
                                <p width = 100%>
                                    <strong>
                                        Nombre:
                                    </strong>
                                        ${cajaNombreCliente.value} ${cajaApellidosCliente.value}
                                </p>
                                <p>
                                    <strong>
                                        Medico:
                                    </strong>
                                        ${cajaNombresDoctor.value} ${cajaApellidosDoctor.value}
                                </p><hr></br>
                                <h2 style='font-size: 30px;'>${estudio.nombre}</h2>
                                ${estudio.resultados[0].limites.  length >0 ? (
                                        "<div style='display: flex;justify-content: space-between;'><h3>Resultados:</h3> <h3>Limites</h3></div>"
                                    ):(
                                        "<h3>Resultados:</h3>"
                                    )}
                                
                                <div style="display: flex; justify-content: space-between;">
                                <p>

                                ${escribirResultados(estudio)}
                                </div>
                                </p>
                                ${estudio.observaciones && estudio.observaciones !== "" ?(
                                        `<h3>observaciones</h3><p>${estudio.observaciones}</p>`
                                    ):(
                                        ""
                                    )}
                            </div>
                        </td></tr></tbody>
                        <tfoot><tr><td>
                            <div class="footer-space">&nbsp;</div>
                        </td></tr></tfoot>
                    </table>
                    `;

        });


        return texto;
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
                                <button class="btn hover" onclick="borrarEstudio(${i}); visualizarEstudios();">
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
        // console.log(estudios);

        if (editando === true) {
            borrarEstudio(indexEditar);

            insertEstudioAt(estudios, indexEditar, estudio)
            editando = false;
        } else {
            estudios.push(estudio);
        }

        visualizarEstudios();
    }

    function insertEstudioAt(array, index, element) {
        array.splice(index, 0, element);
    }

    function borrarEstudio(index) {
        estudios.splice(index, 1);

        // visualizarEstudios();
    }

    function editarEstudios(index) { 
        editando = true;
        indexEditar = index;

        estudioEditar = estudios[index];
        abrirEstudio(estudioEditar.idmodal);
    }
    
</script>

