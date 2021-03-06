let fechaDistinta;
function imprimirEstudio(editando, fecha) {
  fechaDistinta = fecha;
  if (editando === true) {
    if (estudios.length > 0 && cajaNombre.value && cajaNombreDoctor.value) {
      const ventana = window.open('', 'impresion', `width=${window.innerWidth - 50}, height=${window.innerHeight - 10}`);
      ventana.document.write(generarDocumento(editando));
      ventana.document.close();
      ventana.onreadystatechange = () => {
        console.log('hola');
      }
      ventana.onload = function () {
        setTimeout(() => {
          ventana.print();
        }, 300);
      };
      ventana.addEventListener("afterprint", () => {
        ventana.close();
        CapturarEstudios();
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

      const ventana = window.open("", 'impresion', `width=${window.innerWidth - 50}, height=${window.innerHeight - 10}`);
      ventana.document.write(generarDocumento(editando));
      ventana.document.close();
      ventana.onload = () => {
        setTimeout(() => {
          ventana.print();
        }, 300);
      };
      ventana.addEventListener("afterprint", () => {
        ventana.close();
        CapturarEstudios();
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
        
    
        table { width: 100%;}

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
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>
                                <div>
                                    <img src="../../Assets/encabezado.jpg" alt="Encabezado oga" style="height: 50%; display: block;">
                                    <br>
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
                                    <img src="../../Assets/encabezado.jpg" alt="Encabezado oga" style="height: 50%; display: block;">
                                    <br>
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

function generarEstudios() {
  let resultado = ``;
  estudios.forEach(estudio => {

    if (estudio.idmodal === 'estudioenblanco') {
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
                    <div style="display: flex; justify-content: initial;">
                        <span style="margin-left: 1em; width: 65%;">Resultados:</span>
                        <span style="margin-right: 1em;">Límites</span>
                    </div>
                </td>
            </tr>
            `;
      resultado += `
            <tr>
                <td>
                    <div style="display: flex; justify-content: initial;">
                        <pre style="margin-left: 1em; width: 35%;">${estudio.resultados.parametros}:</pre>
                        <pre style="margin-left: 1em; width: 30%;">${estudio.resultados.resultados}</pre>
                        <pre style="margin-left: 1em; width: 30%;">${estudio.resultados.limites}</pre>
                    </div>
                </td>
            </tr>
            `;

    } else {
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
                    <div style="display: flex; justify-content: initial;">
                        <span style="margin-left: 1em; width: 65%;">Resultados:</span>`;
      if (estudio.resultados.length > 0) {
        resultado += (estudio.resultados[0].limites.length) > 0 ? ('<span style="margin-right: 1em;">Límites</span>') : ('');
      }
      resultado += ` </div>
                </td>
            </tr>`;

      // ${r.resultado}
      estudio.resultados.forEach(r => {
        if (r.resultado && r.nombre) {
          resultado += `
                    <tr>
                        <td>
                            <div style="display: flex; justify-content: initial; margin-bottom: 1em;">
                                <span style="margin-left: 1em; width: 35%;">${r.nombre}:</span>
                                <span style="margin-left: 1em; width: 30%;">${r.resultado}</span>
                                ${r.limites.length > 0 ? (imprimirLimites(r.limites)) : ('')}
                            </div>
                        </td>
                    </tr>`;
        }
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
    }


  });

  return resultado;
}

function imprimirLimites(limites) {
  let cadenaLimites = '<div style="margin-right: 1em;">';

  limites.forEach(limite => {
    cadenaLimites += `
        <span style="margin-right: 1em;">${limite}</span><br>
        `;
  });

  cadenaLimites += '</div>';

  return cadenaLimites;
}

function fecha(editando) {
  if (fechaDistinta) {
    const date = new Date(fechaDistinta);
    date.setTime(date.getTime() + date.getTimezoneOffset() * 60 * 1000);
    
    return `${date.getDate < 10 ? '0' : ''}${date.getDate()} de ${date.toLocaleDateString('default', { month: 'long' })} del ${date.getFullYear()}`;
  } else {
    if (editando === true) {
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
}
