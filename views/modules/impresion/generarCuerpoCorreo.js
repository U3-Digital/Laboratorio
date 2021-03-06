const rutaImagen = 'http://ogalaboratorio.com/panel/Assets/encabezado.jpg';
function generarCorreo(editando) {
    let cuerpo = '';
    if (editando === true) {
        if (estudios.length > 0 && cajaNombre.value && cajaNombreDoctor.value) {
            cuerpo = generarDocumentoCorreo(editando);
        }
    } else {
        if (estudios.length > 0 && cajaNombreCliente.value && cajaNombresDoctor.value && cajaApellidosDoctor.value) {
            cuerpo = generarDocumentoCorreo(editando);
        }
    }

    return cuerpo;
}

function generarDocumentoCorreo(editando) {
    let documento = '';
    documento = documento + generarEstiloCorreo();
    documento += generarCuerpoCorreo(editando);
    return documento;
}
/* <img src="../../Assets/encabezado.jpg" alt="Encabezado oga" style="height: 50%; display: block;"> */

function generarEstiloCorreo() {
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
        
    
        table { width: 200mm;}

        p {
            margin: 0;
        }
        .borde {
            border: 1px solid red;
        }
    </style>
    `;
}

function generarEstudiosCorreo() {
    let resultado = ``;
    estudios.forEach(estudio => {

        if (estudio.idmodal === 'estudioenblanco') {
            resultado += `
            <tr>
                <td>
                    <div>
                        <p style="font-weight: 600;">${estudio.nombre}</p>
                        <hr style="margin: 0 5px;">
                    </div>
                </td>
            </tr>`;
            resultado += `
            <tr>
                <td>
                    <span style="width: 130mm;">Resultados</span>
                    <span style="margin-left: 110mm; right: 0mm;">Límites</span>
                </td>
            </tr>
            `;

            const parametrosEstudios = estudio.resultados.parametros.replace(/\n/g, '/n').split('/n');
            const resultadosEstudios = estudio.resultados.resultados.replace(/\n/g, '/n').split('/n');
            const limitesEstudios = estudio.resultados.limites.replace(/\n/g, '/n').split('/n');
            

            const mayorLongitud = Math.max(parametrosEstudios.length, resultadosEstudios.length, limitesEstudios.length);

            let cosa = '';

            for (let i = 0; i < mayorLongitud; i++) {

              cosa += 
              `
                <tr>
                  <td>
                    <div style="width: 60mm; display: inline;">${parametrosEstudios[i] ? parametrosEstudios[i] : '&nbsp;'}</div>
                    <div style="width: 60mm; display: inline;">${resultadosEstudios[i] ? resultadosEstudios[i] : '&nbsp;'}</div>
                    <div style="width: 70mm; display: inline;">${limitesEstudios[i] ? limitesEstudios[i] : '&nbsp;'}</div>
                  </td>
                </tr>
              `;
            }

            resultado += cosa;

        } else {
            resultado += `
            <tr>
                <td>
                    <div>
                        <p style="font-weight: 600;">${estudio.nombre}</p>
                        <hr style="margin: 0 5px;">
                    </div>
                </td>
            </tr>`;
            resultado += `
            <tr>
                <td>
                    <div>
                        <span style="width: 130mm;">Resultados:</span>`;
                        if (estudio.resultados.length > 0) {
                            resultado += (estudio.resultados[0].limites.length) > 0 ? ('<span style="margin-left: 110mm; right: 0mm;">Límites</span>') : ('');
                        }
            resultado += ` </div>
                </td>
            </tr>`;

            estudio.resultados.forEach(r => {
                if (r.resultado && r.nombre) {
                    resultado += `
                    <tr>
                        <td>
                            <div style="width: 70mm; display: inline;">
                                <span>${r.nombre}:</span>
                            </div>
                            <div style="width: 60mm; display: inline;">
                                <span>${r.resultado}</span>
                            </div>
                            ${r.limites.length > 0 ? (imprimirLimitesCorreo(r.limites)) : ('')}
                        </td>
                    </tr>`;
                }
            });

            if (estudio.observaciones) {
                resultado += `
                <tr>
                    <td>
                        <div>
                            <span style="margin-left: 1em;">Observaciones:&nbsp;&nbsp;&nbsp;&nbsp; ${estudio.observaciones}</span>
                        </div>
                    </td>
                </tr>`;
            }
        }        
    });
    return resultado;
}

function generarCuerpoCorreo(editando) {
    if (editando === true) {
        return `
        <body>
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>
                                <div>
                                    <img src="${rutaImagen}" alt="Encabezado oga" style="height: 20mm; width: 200mm; display: block;">
                                    <br>
                                    <div style="margin-top: 4mm; margin-bottom: 6mm;">
                                        <p>${fecha()}</p>
                                        <p>Paciente: ${cajaNombre.value} &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p>Médico: ${cajaNombreDoctor.value}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ${generarEstudiosCorreo()}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <div style="height: 80px;">&nbsp;</div>
                            </td>
                        </tr>
                        <!--<tr>
                            <td>
                                <img src="../../Assets/piePagina.jpg" alt="Pie de página oga">
                            </td>
                        </tr>-->
                    </tfoot>
                </table>
            </div>    
        </body>
        `;
    } else {
        return `
        <body>
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>
                                <div>
                                    <img src="${rutaImagen}" alt="Encabezado oga" style="height: 20mm; width: 200mm; display: block;">
                                    <br>
                                    <div style="margin-top: 4mm; margin-bottom: 6mm;">
                                        <p>${fecha()}</p>
                                        <p>Paciente: ${cajaNombreCliente.value} ${cajaApellidosCliente.value} &nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p>Médico: ${cajaNombresDoctor.value} ${cajaApellidosDoctor.value}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ${generarEstudiosCorreo()}
                    </tbody>
                    <!--<tfoot>
                        <tr>
                            <td>
                                <div style="height: 80px;">&nbsp;</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../Assets/piePagina.jpg" alt="Pie de página oga">
                            </td>
                        </tr>
                    </tfoot>-->
                </table>
            </div>
        </body>
        `;
    }
}

function imprimirLimitesCorreo(limites) {
    let cadenaLimites = '<div style="width: 60mm; display: inline;">';

    limites.forEach(limite => {
        cadenaLimites += `
        <span style="margin-right: 5mm;">${limite}</span><br>
        `;
    });

    cadenaLimites += '</div>';

    return cadenaLimites;
}