function imprimirEstudio(editando) {
    if (editando === true) {
        if (estudios.length > 0 && cajaNombre.value && cajaNombreDoctor.value) {
            let ventana = window.open('', 'impresion', `width=${window.innerWidth - 50}, height=${window.innerHeight - 50}`);
            ventana.document.write(generarDocumento(editando));
            ventana.document.close();
            ventana.onload = function() {
                console.log('c');
                console.log(ventana.document.getElementById('tabla'), 'get');
                ventana.document.getElementById('tabla').style.pageBreakAfter = "always";
                ventana.print();
            };
            

            ventana.addEventListener("afterprint", () => {
                ventana.close();
            });
        } else {
            Swal.fire({
                title: "¡Rellene por completo el formulario!",
                type: "warning",
                showCancelButton: false
            });
        }
    } else {
        if (estudios.length > 0 && cajaNombreCliente.value && cajaNombresDoctor.value && cajaApellidosDoctor.value) {

            let ventana = window.open('', 'impresion', `width=${window.innerWidth - 50}, height=${window.innerHeight - 50}`);
            ventana.document.write(generarDocumento(editando));
            ventana.document.close();
            ventana.onload = function() {
                console.log('c');
                console.log(ventana.document.getElementById('tabla'), 'get');
                ventana.document.getElementById('tabla').style.pageBreakAfter = "always";
                ventana.print();
            };
            
            ventana.addEventListener("afterprint", () => {
                ventana.close();
            });

        } else {
            Swal.fire({
                title: "¡Rellene por completo el formulario!",
                type: "warning",
                showCancelButton: false
            });
        }
    }
}

function generarDocumento(editando) {

    let documento = '';

    documento = documento + generarEstilo();
    documento += generarCuerpo(editando);

    return documento;
}

function generarEstilo() {
    return `
    <style>
        * {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        @page {
            size: A4;
            margin: 0;
        }

        thead { display: table-header-group; }
        tfoot { display: table-footer-group; }
        .tabla {
            width: 100%;
            height: 100%;
            page-break-after: always;

        }

        p {
            margin: 0;
        }
    </style>
    `;
}

function generarCuerpo(editando) {

    if (editando === true) {
        return `
        <body>
            <div id="tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <td>
                                <div>
                                    <img src="../../Assets/encabezado.jpg" alt="Encabezado oga" style="height: 50%; display: block;">
                                    <div style="display: flex; justify-content: space-between;">
                                        <div>
                                            <p>&nbsp;&nbsp; Paciente: ${cajaNombre.value}</p>
                                            <p>&nbsp;&nbsp; Médico: ${cajaNombreDoctor.value}</p>
                                        </div>
                                        <p style="margin-right: 1em;">${fecha(editando)}</p>
                                    </div>
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ${generarEstudios()}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <img src="../../Assets/piePagina.jpg" alt="Pie de página oga">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </body>
        `;
    } else {
        return `
        <body>
            <div id="tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <td>
                                <div>
                                    <img src="../../Assets/encabezado.jpg" alt="Encabezado oga" style="height: 50%; display: block;">
                                    <div style="display: flex; justify-content: space-between;">
                                        <div>
                                            <p>&nbsp;&nbsp; Paciente: ${cajaNombreCliente.value} ${cajaApellidosCliente.value}</p>
                                            <p>&nbsp;&nbsp; Médico: ${cajaNombresDoctor.value} ${cajaApellidosDoctor.value}</p>
                                        </div>
                                        <p style="margin-right: 1em;">${fecha()}</p>
                                    </div>
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ${generarEstudios()}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <img src="../../Assets/piePagina.jpg" alt="Pie de página oga">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </body>
        `;
    }


}

function generarEstudios() {
    let resultado = ``;
    estudios.forEach(estudio => {

        resultado += `
        <tr>
            <td>
                <div class="borde">
                    <p style="font-weight: 600;">&nbsp;&nbsp;${estudio.nombre}</p>
                    <hr style="margin: 0 5px;">
                </div>
            </td>
        </tr>`;
        resultado += `
        <tr>
            <td>
                <div style="display: flex; justify-content: initial; ">
                    <span style="margin-left: 1em; width: 60%;">Resultados:</span>
                    ${estudio.resultados[0].limites.length > 0 ? ('<span style="margin-right: 1em;">Límites</span>') : ('')}
                </div>
            </td>
        </tr>`;
        // ${r.resultado}
        estudio.resultados.forEach(r => {
            resultado += `
            <tr>
                <td>
                    <div style="display: flex; justify-content: initial; ">
                    <span style="margin-left: 1em; width: 60%;">${r.nombre}: &nbsp;&nbsp;&nbsp;&nbsp; ${r.resultado}</span>
                    ${r.limites.length > 0 ? (imprimirLimites(r.limites)) : ('')}
                    </div>
                </td>
            </tr>`;
        });

        if (estudio.observaciones) {
            resultado += `
            <tr>
                <td>
                    <div style="display: flex; justify-content: space-between; ">
                        <span style="margin-left: 1em;">Observaciones:&nbsp;&nbsp;&nbsp;&nbsp; ${estudio.observaciones}</span>
                    </div>
                </td>
            </tr>`;
        }
    });



    return resultado;
}

function imprimirLimites(limites) {
    let cadenaLimites = '<div style="margin: right: 1em;">';

    limites.forEach(limite => {
        cadenaLimites += `
        <span style="margin-right: 1em;">${limite}</span><br>
        `;
    });

    cadenaLimites += '</div>';

    return cadenaLimites;
}

function fecha(editando) {

    if (editando === true) {
        const date = new Date();
        const year = new Intl.DateTimeFormat('es', { year: 'numeric' }).format(fechaOriginal);
        const month = new Intl.DateTimeFormat('es', { month: 'long' }).format(fechaOriginal);
        const day = new Intl.DateTimeFormat('es', { day: '2-digit' }).format(fechaOriginal);
        return `${day} de ${month} del ${year}`;
    } else {
        const date = new Date();
        const year = new Intl.DateTimeFormat('es', { year: 'numeric' }).format(date);
        const month = new Intl.DateTimeFormat('es', { month: 'long' }).format(date);
        const day = new Intl.DateTimeFormat('es', { day: '2-digit' }).format(date);
        return `${day} de ${month} del ${year}`;
    }


}