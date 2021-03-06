<?php
	$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Tamiz hemoglobinopatia neonatal");
?>

<style>
    
.btn-step {
    padding: 0px;
    width: 2.5em;
    height: 2.5em;
    font-weight: 500;
    margin: 1em;
    background-color: #DDDDDD;
    border-radius: 50% !important;
    transition-duration: 0.2s;
}

.btn-step.active {
    background-color: #007BFF;
    color: white;
}

</style>
<div class="modal fade" id="tamizhemoglobinopatianeonatal" tabindex="-1" role="dialog" aria-labelledby="tamizhemoglobinopatianeonatal" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal  modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Hemoglobinopatia neonatal</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
						<div class="row justify-content-center">
                            <div class="col-auto">
                                <button id="step-1" class="btn btn-step" onclick="cambiar(1)">1</button>
                                <button id="step-2" class="btn btn-step" onclick="cambiar(2)">2</button>
                                <button id="step-3" class="btn btn-step" onclick="cambiar(3)">3</button>
                                <button id="step-4" class="btn btn-step" onclick="cambiar(4)">4</button>
                                <button id="step-5" class="btn btn-step" onclick="cambiar(5)">5</button>
                                <button id="step-6" class="btn btn-step" onclick="cambiar(6)">6</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="content-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8 text-left">
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">Bajo (LR)</div>
                                                        <div class="col-md-3 text-center">Dentro (LR)</div>
                                                        <div class="col-md-3 text-center">Sobre (LR)</div>
                                                        <div class="col-md-3 text-center">Límites de referencia</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    Fenotipo de hemoglobina
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                  HbFA
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    HbFA
                                                </div>
                                            </div>
                                            <hr style="background-color: #BBBBBB">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-responsive">
                                                        <tr>
                                                            <th colspan="2" style="text-align: center; padding: 5px 10px;">Interpetración del fenotipo de hemoglobina</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">Fenotipo</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Descripción</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFA</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Hemoglobina normal</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFS</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Drepanocitosis</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFAS</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Rasgo drepanocítico</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFC</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Hemoglobinopatia C</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFAC</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Rasgo de hemoglobina C</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFD</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Hemoglobinopatia D</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFAD</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Hemoglobina D</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFE</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Hemoglobina E</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFAE</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Rasgo de hemoglobina E</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center; padding: 5px 10px;">HbFSC</td>
                                                            <td style="text-align: center; padding: 5px 10px;">Hemoglobinopatia SC</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-2">
                                                  <input class="form-control" required type="text" name="cajaResultadoFenotipoHemoglobina" id="cajaResultadoFenotipoHemoglobina" value="HbFA">
                                                </div>
                                            </div>
                                            <hr style="background-color: #BBBBBB">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Desórdenes endocrinológicos</h6>
                                                    Hipotiroidismo congénito
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input class="form-control" type="text" name="cajaResultadoHipotiroidismoCongenito" id="cajaResultadoHipotiroidismoCongenito" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    <br>
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Hormona estimulante de tiroides neonatal</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHormonaEstimulanteTN" id="cajaResultadoHormonaEstimulanteTN">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    &lt;9 µUl/ml
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>T4 Neonatal</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoT4Neonatal" id="cajaResultadoT4Neonatal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    6.4 - 21.2 g/dl
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Hiperplasia adrenal congénita</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHiperplaciaAdrenalCongenita" id="cajaResultadoHiperplaciaAdrenalCongenita" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>17-OH Progesterona neonatal</p>
                                                    <small>*Método: Flurometría</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultado17OHPN" id="cajaResultado17OHPN">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    0.17 - 22 ng/ml
                                                </div>
                                            </div>
                                            <hr style="background-color: #BBBBBB">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Desórdenes en el metabolismo de carbohidratos</h6>
                                                    Galactosemia clásica
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input class="form-control" type="text" name="cajaResultadoGalactosemiaClasica" id="cajaResultadoGalactosemiaClasica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    <br>
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Galactosa neonatal</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoGalactosaNeonatal" id="cajaResultadoGalactosaNeonatal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    &lt;8 mg/dl
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Galactosa uridil transferesa neonatal</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoGalactosaUridilTN" id="cajaResultadoGalactosaUridilTN">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    3.5 - 99 U/g Hb
                                                </div>
                                            </div>
                                            <hr style="background-color: #BBBBBB">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Otros desórdenes</h6>
                                                    Fibrosis quística (CF)
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input class="form-control" type="text" name="cajaResultadoFibrosisQuistica" id="cajaResultadoFibrosisQuistica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    <br>
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Inmunotripsina reactiva neonatal</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoInmunotripsinaReactivaN" id="cajaResultadoInmunotripsinaReactivaN">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    0 - 89 ng/ml
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Deficiencia de biotinidasa</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDeficienciaBiotinidasa" id="cajaResultadoDeficienciaBiotinidasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Biotinidasa</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoBiotinidasa" id="cajaResultadoBiotinidasa">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    70 - 500 u
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Deficiencia de glucosa-6-fostfato deshidrogenasa</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDeficienciaGlucosa6FD" id="cajaResultadoDeficienciaGlucosa6FD" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Glucosa-6-fosfato deshidrogenasa</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoGlucosa6FD" id="cajaResultadoGlucosa6FD">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    2.5 - 99 U/g Hb
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8 text-left">
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">Bajo (LR)</div>
                                                        <div class="col-md-3 text-center">Dentro (LR)</div>
                                                        <div class="col-md-3 text-center">Sobre (LR)</div>
                                                        <div class="col-md-3 text-center">Límites de referencia</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Desordenes del metabolismo de aminoácidos</h6>
                                                    Fenilalanina
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input class="form-control" type="text" name="cajaResultadoFenilalanina" id="cajaResultadoFenilalanina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Tirosina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTirosina" id="cajaResultadoTirosina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Triptofano</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTriptofano" id="cajaResultadoTriptofano" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Valina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoValina" id="cajaResultadoValina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Leucina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoLeucina" id="cajaResultadoLeucina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Isoleucina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoIsoleucina" id="cajaResultadoIsoleucina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Metionina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMetionina" id="cajaResultadoMetionina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Succinilacetona</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoSuccinilacetona" id="cajaResultadoSuccinilacetona" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Glicina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoGlicina" id="cajaResultadoGlicina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Arginina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoArginina" id="cajaResultadoArginina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Alanina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAlanina" id="cajaResultadoAlanina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Citrulina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCitrulina" id="cajaResultadoCitrulina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Ornitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoOrnitina" id="cajaResultadoOrnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Prolina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoProlina" id="cajaResultadoProlina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Ácido aspártico</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidoAspartico" id="cajaResultadoAcidoAspartico" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Ácido glutámico</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidoGlutamico" id="cajaResultadoAcidoGlutamico" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Lisina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoLisina" id="cajaResultadoLisina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="cajaInterpretacionTamiz2">Interpretación:</label>
                                                        <input class="form-control" type="text" name="cajaInterpretacionTamiz2" id="cajaInterpretacionTamiz2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8 text-left">
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">Bajo (LR)</div>
                                                        <div class="col-md-3 text-center">Dentro (LR)</div>
                                                        <div class="col-md-3 text-center">Sobre (LR)</div>
                                                        <div class="col-md-3 text-center">Límites de referencia</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Condiciones evaluadas</h6>
                                                    Fenilcetonuria clásica (PKU)
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input class="form-control" type="text" name="cajaResultadoFenilcetonuriaClasica" id="cajaResultadoFenilcetonuriaClasica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Hiperfenilalaninemia variante benigna (H-PHE)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHiperfenilalaninemiaVB" id="cajaResultadoHiperfenilalaninemiaVB" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Desorden en la biosíntesis de biopterina BIOPT (BS)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoBiosintesisBiopterina" id="cajaResultadoBiosintesisBiopterina" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Desórden de regeneración de biopterina BIOPT (REG)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoRegeneracionBiopterina" id="cajaResultadoRegeneracionBiopterina" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Enfermedad de jarabe de maple (MSUD)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoJarabeDeMaple" id="cajaResultadoJarabeDeMaple" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Homocistinuria (HCY)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHomocistinuria" id="cajaResultadoHomocistinuria" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Hipermetioninemia (MET)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHipermetioninemia" id="cajaResultadoHipermetioninemia" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Tirosinemia tipo 1 (TRY I)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTirosinemia1" id="cajaResultadoTirosinemia1" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Tirosinemia tipo 2 (TRY II)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTirosinemia2" id="cajaResultadoTirosinemia2" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Tirosinemia tipo 3 (TRY III)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTirosinemia3" id="cajaResultadoTirosinemia3" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Hiperglicinemia no cetósica (NKH)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHiperglicinemiaNoCetosica" id="cajaResultadoHiperglicinemiaNoCetosica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Argininemia (ARG)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoArgininemia" id="cajaResultadoArgininemia" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Citrulinemia tipo 1 (CIT)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCitrulinemia1" id="cajaResultadoCitrulinemia1" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Citrulinemia tipo 2 (CIT II)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCitrulinemia2" id="cajaResultadoCitrulinemia2" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Axidemia arginosuccinica (ASA)</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAxidemiaArginosuccinica" id="cajaResultadoAxidemiaArginosuccinica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Prolinemia</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoProlinemia" id="cajaResultadoProlinemia" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Hiperornitinemia</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHiperornitinemia" id="cajaResultadoHiperornitinemia" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Deficiencia de carbamoil fosfatato sintetasa</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCarbomoilFosfatatoSintetasa" id="cajaResultadoCarbomoilFosfatatoSintetasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>Deficiencia de ornitina carbamoil sintetasa</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoOrnitinaCarbamoilSintetasa" id="cajaResultadoOrnitinaCarbamoilSintetasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8 text-left">
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">Bajo (LR)</div>
                                                        <div class="col-md-3 text-center">Dentro (LR)</div>
                                                        <div class="col-md-3 text-center">Sobre (LR)</div>
                                                        <div class="col-md-3 text-center">Límites de referencia</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Perifl de acilcarnitinas</h6>
                                                    C0 Carnitina libre
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <br>
                                                    <input class="form-control" type="text" name="cajaResultadoCarnitinaLibre" id="cajaResultadoCarnitinaLibre" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C2 Acetilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcetilcarnitina" id="cajaResultadoAcetilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C3 Propiomilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoPropiomilcarnitina" id="cajaResultadoPropiomilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C3D C Malonilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMalonilcarnitina" id="cajaResultadoMalonilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C4 Butirilcarnitina + isobutirilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoButirilcarnitinaIsobutirilcarnitina" id="cajaResultadoButirilcarnitinaIsobutirilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C4O H 3-Hidroxibutirilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHidroxibutirilcarnitina" id="cajaResultadoHidroxibutirilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C4D C Metilmalonil</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMetilmalonil" id="cajaResultadoMetilmalonil" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C5 Isovalerilcarnitina + metilbutirilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoIsovalerilcarnitinaM" id="cajaResultadoIsovalerilcarnitinaM" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C5:1 Tiglilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTiglilcarnitina" id="cajaResultadoTiglilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C5D C Glutarilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoGlutarilcarnitina" id="cajaResultadoGlutarilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C5O H 3-Hidroxiisovalerilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHidroxiisovalerilcarnitina" id="cajaResultadoHidroxiisovalerilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C6 Hexanoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHexanoilcarnitina" id="cajaResultadoHexanoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C6D C Metilglutarilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMetilglutarilcarnitina" id="cajaResultadoMetilglutarilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C8:1 Octenoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoOctenoilcarnitina" id="cajaResultadoOctenoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C10 Decanoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDecanoilcarnitina" id="cajaResultadoDecanoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C10:1 Decenoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDecenoilcarnitina" id="cajaResultadoDecenoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C10:2 Dodecanoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDodecanoilcarnitina" id="cajaResultadoDodecanoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C12 Dodecanoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDodecanoilcarnitina2" id="cajaResultadoDodecanoilcarnitina2" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C12:1 Dodecenoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDodecenoilcarnitina" id="cajaResultadoDodecenoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C14 Tetradecanoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTetradecanoilcarnitina" id="cajaResultadoTetradecanoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C14:1 Tetradecadienoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTetradecadienoilcarnitina" id="cajaResultadoTetradecadienoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C14OH 3-Hidroxi-tetradecanoil</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultado3Hidroxitetradecanoil" id="cajaResultado3Hidroxitetradecanoil" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C16 Palmitoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoPalmitoilcarnitina" id="cajaResultadoPalmitoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C16:1 Hexadecenoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHexadecenoilcarnitina" id="cajaResultadoHexadecenoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C16OH 3-Hidroxipalmitoleilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHidroxipalmitoleilcarnitina" id="cajaResultadoHidroxipalmitoleilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C18 Estearoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoEstearoilcarnitina" id="cajaResultadoEstearoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C18:1 Oleilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoOleilcarnitina" id="cajaResultadoOleilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C18:2 Linoleoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoLinoleoilcarnitina" id="cajaResultadoLinoleoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C18OH 3-Hidroxiestearoilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHidroxiestearoilcarnitina" id="cajaResultadoHidroxiestearoilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    <p>C18:1-OH 3-Hidroxioleilcarnitina</p>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHidroxioleilcarnitina" id="cajaResultadoHidroxioleilcarnitina" value="Normal">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Normal
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="cajaInterpretacionTamiz4">Interpretación:</label>
                                                        <input class="form-control" type="text" name="cajaInterpretacionTamiz4" id="cajaInterpretacionTamiz4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8 text-left">
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">Bajo (LR)</div>
                                                        <div class="col-md-3 text-center">Dentro (LR)</div>
                                                        <div class="col-md-3 text-center">Sobre (LR)</div>
                                                        <div class="col-md-3 text-center">Límites de referencia</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Desórdenes en la oxidación de ácidos grasos</h6>
                                                    Def de acil CoA deshidrogenasa de cadena media
                                                    <small>Marcador primario: C8, C6, C10:1, C10</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 align-self-center">
                                                    <input class="form-control" type="text" name="cajaResultadoDeshidrogenasaCadenaMedia" id="cajaResultadoDeshidrogenasaCadenaMedia" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center algin-self-center">
                                                    <br>
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Def de acil CosA deshidrogenasa de cadena muy larga
                                                    <small>Marcador primario: C14:2, C14:1, C14</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDeshidrogenasaCadenaMuyLarga" id="cajaResultadoDeshidrogenasaCadenaMuyLarga" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Def de acil CosA deshidrogenasa de cadena larga
                                                    <small>Marcador: C16:1-OH, C16-OH, C18:1-OH, C18-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDeshidrogenasaCadenaLarga" id="cajaResultadoDeshidrogenasaCadenaLarga" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de la proteína trifuncional
                                                    <small>Marcador: C16:1-OH, C16-OH, C18:1-OH, C18-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoProteinaTrifuncional" id="cajaResultadoProteinaTrifuncional" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia del transportador de carnitina
                                                    <small>Marcador: C0</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoTransportadorCarnitina" id="cajaResultadoTransportadorCarnitina" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de acil CoA deshidrogenasa de cadena corta
                                                    <small>Marcador primario: C4</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoDeshidrogenasaCadenaCorta" id="cajaResultadoDeshidrogenasaCadenaCorta" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia glutárica tipo II
                                                    <small>Marcador: C4 - C18 saturados e insaturados</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidemiaGlutaricaTipoII" id="cajaResultadoAcidemiaGlutaricaTipoII" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Def L-3-hidroxiacilo deshidrogenasa de cadena corta
                                                    <small>Marcador primario: C4-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoHidroxiaciloDeshidrogenasaCorta" id="cajaResultadoHidroxiaciloDeshidrogenasaCorta" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de cetoacilCoA tiolasa de cadena media
                                                    <small>Marcador primario: C8, C6, C10:1, C10</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCetoacilCoaTiolasaMedia" id="cajaResultadoCetoacilCoaTiolasaMedia" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de carnitina palmitoiltransferasa I
                                                    <small>Marcador: C16, C18:2, C18:1, C18</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCarnitinaPalmitoiltransferasa1" id="cajaResultadoCarnitinaPalmitoiltransferasa1" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de carnitin-acilcarnitina translocasa
                                                    <small>Marcador: C16, C18:2, C18:1, C18</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCarnitinAciclcarnitinaTranslocasa" id="cajaResultadoCarnitinAciclcarnitinaTranslocasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de carnitina palmitoiltransferasa I
                                                    <small>Marcador: C0 (Alto), C16 (Bajo), C18 (Bajo)</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoCarnitinaPalmitoilTransferasa2" id="cajaResultadoCarnitinaPalmitoilTransferasa2" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia de 2,4 dienoil-CoA reductasa
                                                    <small>Marcador primario: C10:2</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultado24DienoilCOAReductasa" id="cajaResultado24DienoilCOAReductasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    Ausente
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8 text-left">
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">Bajo (LR)</div>
                                                        <div class="col-md-3 text-center">Dentro (LR)</div>
                                                        <div class="col-md-3 text-center">Sobre (LR)</div>
                                                        <div class="col-md-3 text-center">Límites de referencia</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6>Desórdenes de ácidos orgánicos</h6>
                                                    Acidemia isovalérica
                                                    <small>Marcador primario: C5</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 align-self-center">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidemiaIsovalerica" id="cajaResultadoAcidemiaIsovalerica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia glutárica tipo I
                                                    <small>Marcador primario: C5D C</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidemiaGlutaricaTipo1" id="cajaResultadoAcidemiaGlutaricaTipo1" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia 3-hidroxi-3-metilglutárica
                                                    <small>Marcador primario: C5-OH, C6DC</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultado3Hidroxi3Metilglutarica" id="cajaResultado3Hidroxi3Metilglutarica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia 3-metilcrotonil-ocaborxilasa
                                                    <small>Marcador: C0</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMetilcrotonilOcaborxilasa" id="cajaResultadoMetilcrotonilOcaborxilasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia acil CoA deshidrogenasa de cadena corta
                                                    <small>Marcador: C5-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcilCOADeshidrogenasaCadenaCorta" id="cajaResultadoAcilCOADeshidrogenasaCadenaCorta" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia metilmalónica
                                                    <small>Marcador primario: C3</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidemiaMetilmalonica" id="cajaResultadoAcidemiaMetilmalonica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia propiónica
                                                    <small>Marcador primario: C3</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidemiaPropionica" id="cajaResultadoAcidemiaPropionica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Deficiencia beta-cetotiolasa
                                                    <small>Marcador primario: C5:1, C5-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoBetaCetotiolasa" id="cajaResultadoBetaCetotiolasa" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia metilmalónica con homocistinuria
                                                    <small>Marcador primario: C3</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMetilmalonicaHomocistinuria" id="cajaResultadoMetilmalonicaHomocistinuria" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia malónica
                                                    <small>Marcador primario: C3</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoAcidemiaMalonica" id="cajaResultadoAcidemiaMalonica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Isobutiril glicinuria
                                                    <small>Marcador primario: C4</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoIsibutirilGlicinuria" id="cajaResultadoIsibutirilGlicinuria" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia 2-metil-3-hidroxibutirica
                                                    <small>Marcador primario: C5-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoMetilHidroxibutirica" id="cajaResultadoMetilHidroxibutirica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    2-Metilbutirilglicinuria
                                                    <small>Marcador primario: C5</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultado2Metilbutirilglicinuria" id="cajaResultado2Metilbutirilglicinuria" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 align-self-center">
                                                    Acidemia 3-metilglutacónica
                                                    <small>Marcador primario: C5-OH</small>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultado3MetilGlutaconica" id="cajaResultado3MetilGlutaconica" value="Ausente">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center align-self-center">
                                                    Ausente
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
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarTamiz()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

    cambiar(1);

    function cambiar(numero) {
        for(let i = 1; i < 7; i++) {
            document.getElementById(`step-${i}`).classList.remove('active');
            document.getElementById(`content-${i}`).style.display = 'none';
            if (i === numero) {
                document.getElementById(`step-${numero}`).classList.add('active');
                document.getElementById(`content-${numero}`).style.display = 'block';
            }
        }

    }

	function validarTamiz() {

			let estudio = {
				idmodal: "tamizhemoglobinopatianeonatal",
				nombre: "Tamiz hemoglobinopatía neonatal",
				resultados:
				[{
					nombre: "Fenotipo de hemoglobina",
					resultado: cajaResultadoFenotipoHemoglobina.value,
					limites: ["HbFA"]
				},
                {
					nombre: "Hipotiroidismo congénito",
					resultado: cajaResultadoHipotiroidismoCongenito.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Hormona estimulante de tiroides neonatal",
					resultado: cajaResultadoHormonaEstimulanteTN.value,
					limites: ["< 9 µUl/ml"]
				},
                {
					nombre: "T4 Neonatal",
					resultado: cajaResultadoT4Neonatal.value,
					limites: ["6.4 - 21.2 g/dl"]
				},
                {
					nombre: "Hiperplasia adrenal congénita",
					resultado: cajaResultadoHiperplaciaAdrenalCongenita.value,
					limites: ["Ausente"]
				},
                {
					nombre: "17-OH Progesterona neonatal",
					resultado: cajaResultado17OHPN.value,
					limites: ["0.17 - 22 ng/ml"]
				},
                {
					nombre: "Galactosemia clásica",
					resultado: cajaResultadoGalactosemiaClasica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Galactosa neonatal",
					resultado: cajaResultadoGalactosaNeonatal.value,
					limites: ["< 8 mg/dl"]
				},
                {
					nombre: "Galactosa uridil transferesa neonatal",
					resultado: cajaResultadoGalactosaUridilTN.value,
					limites: ["3.5 - 99 U/g Hb"]
				},
                {
					nombre: "Otros desórdenes",
					resultado: cajaResultadoFibrosisQuistica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Inmunotripsina reactiva neonatal",
					resultado: cajaResultadoInmunotripsinaReactivaN.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de biotinidasa",
					resultado: cajaResultadoDeficienciaBiotinidasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Biotinidasa",
					resultado: cajaResultadoBiotinidasa.value,
					limites: ["70 - 500 u"]
				},
                {
					nombre: "Deficiencia de glucosa-6-fostfato deshidrogenasa",
					resultado: cajaResultadoDeficienciaGlucosa6FD.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Glucosa-6-fosfato deshidrogenasa",
					resultado: cajaResultadoGlucosa6FD.value,
					limites: ["2.5 - 99 U/g Hb"]
				},
                {
					nombre: "Fenilalanina",
					resultado: cajaResultadoFenilalanina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Tirosina",
					resultado: cajaResultadoTirosina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Triptofano",
					resultado: cajaResultadoTriptofano.value,
					limites: ["Normal"]
				},
                {
					nombre: "Valina",
					resultado: cajaResultadoValina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Leucina",
					resultado: cajaResultadoLeucina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Isoleucina",
					resultado: cajaResultadoIsoleucina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Metionina",
					resultado: cajaResultadoMetionina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Succinilacetona",
					resultado: cajaResultadoSuccinilacetona.value,
					limites: ["Normal"]
				},
                {
					nombre: "Glicina",
					resultado: cajaResultadoGlicina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Arginina",
					resultado: cajaResultadoArginina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Alanina",
					resultado: cajaResultadoAlanina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Citrulina",
					resultado: cajaResultadoCitrulina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Ornitina",
					resultado: cajaResultadoOrnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Prolina",
					resultado: cajaResultadoProlina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Ácido aspártico",
					resultado: cajaResultadoAcidoAspartico.value,
					limites: ["Normal"]
				},
                {
					nombre: "Ácido glutámico",
					resultado: cajaResultadoAcidoGlutamico.value,
					limites: ["Normal"]
				},
                {
					nombre: "Lisina",
					resultado: cajaResultadoLisina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Interpretación",
					resultado: cajaInterpretacionTamiz2.value,
					limites: ["Normal"]
				},
                {
					nombre: "Fenilcetonuria clásica (PKU)",
					resultado: cajaResultadoFenilcetonuriaClasica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Hiperfenilalaninemia variante benigna (H-PHE)",
					resultado: cajaResultadoHiperfenilalaninemiaVB.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Desorden en la biosíntesis de biopterina BIOPT (BS)",
					resultado: cajaResultadoBiosintesisBiopterina.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Desórden de regeneración de biopterina BIOPT (REG)",
					resultado: cajaResultadoRegeneracionBiopterina.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Enfermedad de jarabe de maple (MSUD)",
					resultado: cajaResultadoJarabeDeMaple.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Homocistinuria (HCY)",
					resultado: cajaResultadoHomocistinuria.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Hipermetioninemia (MET)",
					resultado: cajaResultadoHipermetioninemia.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Tirosinemia tipo 1 (TRY I)",
					resultado: cajaResultadoTirosinemia1.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Tirosinemia tipo 2 (TRY II)",
					resultado: cajaResultadoTirosinemia2.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Tirosinemia tipo 3 (TRY III)",
					resultado: cajaResultadoTirosinemia3.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Hiperglicinemia no cetósica (NKH)",
					resultado: cajaResultadoHiperglicinemiaNoCetosica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Argininemia (ARG)",
					resultado: cajaResultadoArgininemia.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Citrulinemia tipo 1 (CIT)",
					resultado: cajaResultadoCitrulinemia1.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Citrulinemia tipo 2 (CIT II)",
					resultado: cajaResultadoCitrulinemia2.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Axidemia arginosuccinica (ASA)",
					resultado: cajaResultadoAxidemiaArginosuccinica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Prolinemia",
					resultado: cajaResultadoProlinemia.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Hiperornitinemia",
					resultado: cajaResultadoHiperornitinemia.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de carbamoil fosfatato sintetasa",
					resultado: cajaResultadoCarbomoilFosfatatoSintetasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de ornitina carbamoil sintetasa",
					resultado: cajaResultadoOrnitinaCarbamoilSintetasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "C0 Carnitina libre",
					resultado: cajaResultadoCarnitinaLibre.value,
					limites: ["Normal"]
				},
                {
					nombre: "C2 Acetilcarnitina",
					resultado: cajaResultadoAcetilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C3 Propiomilcarnitina",
					resultado: cajaResultadoPropiomilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C3D C Malonilcarnitina",
					resultado: cajaResultadoMalonilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C4 Butirilcarnitina + isobutirilcarnitina",
					resultado: cajaResultadoButirilcarnitinaIsobutirilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C4O H 3-Hidroxibutirilcarnitina",
					resultado: cajaResultadoHidroxibutirilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C4D C Metilmalonil",
					resultado: cajaResultadoMetilmalonil.value,
					limites: ["Normal"]
				},
                {
					nombre: "C5 Isovalerilcarnitina + metilbutirilcarnitina",
					resultado: cajaResultadoIsovalerilcarnitinaM.value,
					limites: ["Normal"]
				},
                {
					nombre: "C5:1 Tiglilcarnitina",
					resultado: cajaResultadoTiglilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C5D C Glutarilcarnitina",
					resultado: cajaResultadoGlutarilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C5O H 3-Hidroxiisovalerilcarnitina",
					resultado: cajaResultadoHidroxiisovalerilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C6 Hexanoilcarnitina",
					resultado: cajaResultadoHexanoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C6D C Metilglutarilcarnitina",
					resultado: cajaResultadoMetilglutarilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C8:1 Octenoilcarnitina",
					resultado: cajaResultadoOctenoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C10 Decanoilcarnitina",
					resultado: cajaResultadoDecanoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C10:1 Decenoilcarnitina",
					resultado: cajaResultadoDecenoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C10:2 Dodecanoilcarnitina",
					resultado: cajaResultadoDodecanoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C12 Dodecanoilcarnitina",
					resultado: cajaResultadoDodecanoilcarnitina2.value,
					limites: ["Normal"]
				},
                {
					nombre: "C12:1 Dodecenoilcarnitina",
					resultado: cajaResultadoDodecenoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C14 Tetradecanoilcarnitina",
					resultado: cajaResultadoTetradecanoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C14:1 Tetradecadienoilcarnitina",
					resultado: cajaResultadoTetradecadienoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C14OH 3-Hidroxi-tetradecanoil",
					resultado: cajaResultado3Hidroxitetradecanoil.value,
					limites: ["Normal"]
				},
                {
					nombre: "C16 Palmitoilcarnitina",
					resultado: cajaResultadoPalmitoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C16:1 Hexadecenoilcarnitina",
					resultado: cajaResultadoHexadecenoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C16OH 3-Hidroxipalmitoleilcarnitina",
					resultado: cajaResultadoHidroxipalmitoleilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C18 Estearoilcarnitina",
					resultado: cajaResultadoEstearoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C18:1 Oleilcarnitina",
					resultado: cajaResultadoOleilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C18:2 Linoleoilcarnitina",
					resultado: cajaResultadoLinoleoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C18OH 3-Hidroxiestearoilcarnitina",
					resultado: cajaResultadoHidroxiestearoilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "C18:1-OH 3-Hidroxioleilcarnitina",
					resultado: cajaResultadoHidroxioleilcarnitina.value,
					limites: ["Normal"]
				},
                {
					nombre: "Interpretación",
					resultado: cajaInterpretacionTamiz4.value,
					limites: ["Normal"]
				},
                {
					nombre: "Def de acil CoA deshidrogenasa de cadena media",
					resultado: cajaResultadoDeshidrogenasaCadenaMedia.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Def de acil CosA deshidrogenasa de cadena muy larga",
					resultado: cajaResultadoDeshidrogenasaCadenaMuyLarga.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Def de acil CosA deshidrogenasa de cadena larga",
					resultado: cajaResultadoDeshidrogenasaCadenaLarga.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de la proteína trifuncional",
					resultado: cajaResultadoProteinaTrifuncional.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia del transportador de carnitina",
					resultado: cajaResultadoTransportadorCarnitina.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de acil CoA deshidrogenasa de cadena corta",
					resultado: cajaResultadoDeshidrogenasaCadenaCorta.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia glutárica tipo II",
					resultado: cajaResultadoAcidemiaGlutaricaTipoII.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Def L-3-hidroxiacilo deshidrogenasa de cadena corta",
					resultado: cajaResultadoHidroxiaciloDeshidrogenasaCorta.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de cetoacilCoA tiolasa de cadena media",
					resultado: cajaResultadoCetoacilCoaTiolasaMedia.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de carnitina palmitoiltransferasa I",
					resultado: cajaResultadoCarnitinaPalmitoiltransferasa1.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de carnitin-acilcarnitina translocasa",
					resultado: cajaResultadoCarnitinAciclcarnitinaTranslocasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de carnitina palmitoiltransferasa I",
					resultado: cajaResultadoCarnitinaPalmitoilTransferasa2.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia de 2,4 dienoil-CoA reductasa",
					resultado: cajaResultado24DienoilCOAReductasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia isovalérica",
					resultado: cajaResultadoAcidemiaIsovalerica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia glutárica tipo I",
					resultado: cajaResultadoAcidemiaGlutaricaTipo1.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia 3-hidroxi-3-metilglutárica",
					resultado: cajaResultado3Hidroxi3Metilglutarica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia 3-metilcrotonil-ocaborxilasa",
					resultado: cajaResultadoMetilcrotonilOcaborxilasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia acil CoA deshidrogenasa de cadena corta",
					resultado: cajaResultadoAcilCOADeshidrogenasaCadenaCorta.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia metilmalónica",
					resultado: cajaResultadoAcidemiaMetilmalonica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia propiónica",
					resultado: cajaResultadoAcidemiaPropionica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Deficiencia beta-cetotiolasa",
					resultado: cajaResultadoBetaCetotiolasa.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia metilmalónica con homocistinuria",
					resultado: cajaResultadoMetilmalonicaHomocistinuria.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia malónica",
					resultado: cajaResultadoAcidemiaMalonica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Isobutiril glicinuria",
					resultado: cajaResultadoIsibutirilGlicinuria.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia 2-metil-3-hidroxibutirica",
					resultado: cajaResultadoMetilHidroxibutirica.value,
					limites: ["Ausente"]
				},
                {
					nombre: "2-Metilbutirilglicinuria",
					resultado: cajaResultado2Metilbutirilglicinuria.value,
					limites: ["Ausente"]
				},
                {
					nombre: "Acidemia 3-metilglutacónica",
					resultado: cajaResultado3MetilGlutaconica.value,
					limites: ["Ausente"]
				}],
				observaciones: "",
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalTamiz();
			limpiarTamiz();
	}

	function cerrarModalTamiz() {
		$(`#tamizhemoglobinopatianeonatal`).modal('toggle');
	}

	function limpiarTamiz() {
		cajaResultadoFenotipoHemoglobina.value = 'HbFA';
        cajaResultadoHipotiroidismoCongenito.value = 'Ausente';
        cajaResultadoHormonaEstimulanteTN.value = '';
        cajaResultadoT4Neonatal.value = '';
        cajaResultadoHiperplaciaAdrenalCongenita.value = 'Ausente';
        cajaResultado17OHPN.value = '';
        cajaResultadoGalactosemiaClasica.value = 'Ausente';
        cajaResultadoGalactosaNeonatal.value = '';
        cajaResultadoGalactosaUridilTN.value = '';
        cajaResultadoFibrosisQuistica.value = 'Ausente';
        cajaResultadoInmunotripsinaReactivaN.value = '';
        cajaResultadoDeficienciaBiotinidasa.value = 'Ausente';
        cajaResultadoBiotinidasa.value = '';
        cajaResultadoDeficienciaGlucosa6FD.value = 'Ausente';
        cajaResultadoGlucosa6FD.value = '';

        cajaResultadoFenilalanina.value = 'Normal';
        cajaResultadoTirosina.value = 'Normal';
        cajaResultadoTriptofano.value = 'Normal';
        cajaResultadoValina.value = 'Normal';
        cajaResultadoLeucina.value = 'Normal';
        cajaResultadoIsoleucina.value = 'Normal';
        cajaResultadoMetionina.value = 'Normal';
        cajaResultadoSuccinilacetona.value = 'Normal';
        cajaResultadoGlicina.value = 'Normal';
        cajaResultadoArginina.value = 'Normal';
        cajaResultadoAlanina.value = 'Normal';
        cajaResultadoCitrulina.value = 'Normal';
        cajaResultadoOrnitina.value = 'Normal';
        cajaResultadoProlina.value = 'Normal';
        cajaResultadoAcidoAspartico.value = 'Normal';
        cajaResultadoAcidoGlutamico.value = 'Normal';
        cajaResultadoLisina.value = 'Normal';
        cajaInterpretacionTamiz2.value = '';

        cajaResultadoFenilcetonuriaClasica.value = 'Ausente';
        cajaResultadoHiperfenilalaninemiaVB.value = 'Ausente';
        cajaResultadoBiosintesisBiopterina.value = 'Ausente';
        cajaResultadoRegeneracionBiopterina.value = 'Ausente';
        cajaResultadoJarabeDeMaple.value = 'Ausente';
        cajaResultadoHomocistinuria.value = 'Ausente';
        cajaResultadoHipermetioninemia.value = 'Ausente';
        cajaResultadoTirosinemia1.value = 'Ausente';
        cajaResultadoTirosinemia2.value = 'Ausente';
        cajaResultadoTirosinemia3.value = 'Ausente';
        cajaResultadoHiperglicinemiaNoCetosica.value = 'Ausente';
        cajaResultadoArgininemia.value = 'Ausente';
        cajaResultadoCitrulinemia1.value = 'Ausente';
        cajaResultadoCitrulinemia2.value = 'Ausente';
        cajaResultadoAxidemiaArginosuccinica.value = 'Ausente';
        cajaResultadoProlinemia.value = 'Ausente';
        cajaResultadoHiperornitinemia.value = 'Ausente';
        cajaResultadoCarbomoilFosfatatoSintetasa.value = 'Ausente';
        cajaResultadoOrnitinaCarbamoilSintetasa.value = 'Ausente';

        cajaResultadoCarnitinaLibre.value = 'Normal';
        cajaResultadoAcetilcarnitina.value = 'Normal';
        cajaResultadoPropiomilcarnitina.value = 'Normal';
        cajaResultadoMalonilcarnitina.value = 'Normal';
        cajaResultadoButirilcarnitinaIsobutirilcarnitina.value = 'Normal';
        cajaResultadoHidroxibutirilcarnitina.value = 'Normal';
        cajaResultadoMetilmalonil.value = 'Normal';
        cajaResultadoIsovalerilcarnitinaM.value = 'Normal';
        cajaResultadoTiglilcarnitina.value = 'Normal';
        cajaResultadoGlutarilcarnitina.value = 'Normal';
        cajaResultadoHidroxiisovalerilcarnitina.value = 'Normal';
        cajaResultadoHexanoilcarnitina.value = 'Normal';
        cajaResultadoMetilglutarilcarnitina.value = 'Normal';
        cajaResultadoOctenoilcarnitina.value = 'Normal';
        cajaResultadoDecanoilcarnitina.value = 'Normal';
        cajaResultadoDecenoilcarnitina.value = 'Normal';
        cajaResultadoDodecanoilcarnitina.value = 'Normal';
        cajaResultadoDodecanoilcarnitina2.value = 'Normal';
        cajaResultadoDodecenoilcarnitina.value = 'Normal';
        cajaResultadoTetradecanoilcarnitina.value = 'Normal';
        cajaResultadoTetradecadienoilcarnitina.value = 'Normal';
        cajaResultado3Hidroxitetradecanoil.value = 'Normal';
        cajaResultadoPalmitoilcarnitina.value = 'Normal';
        cajaResultadoHexadecenoilcarnitina.value = 'Normal';
        cajaResultadoHidroxipalmitoleilcarnitina.value = 'Normal';
        cajaResultadoEstearoilcarnitina.value = 'Normal';
        cajaResultadoOleilcarnitina.value = 'Normal';
        cajaResultadoLinoleoilcarnitina.value = 'Normal';
        cajaResultadoHidroxiestearoilcarnitina.value = 'Normal';
        cajaResultadoHidroxioleilcarnitina.value = 'Normal';
        cajaInterpretacionTamiz4.value = '';

        cajaResultadoDeshidrogenasaCadenaMedia.value = 'Ausente';
        cajaResultadoDeshidrogenasaCadenaMuyLarga.value = 'Ausente';
        cajaResultadoDeshidrogenasaCadenaLarga.value = 'Ausente';
        cajaResultadoProteinaTrifuncional.value = 'Ausente';
        cajaResultadoTransportadorCarnitina.value = 'Ausente';
        cajaResultadoDeshidrogenasaCadenaCorta.value = 'Ausente';
        cajaResultadoAcidemiaGlutaricaTipoII.value = 'Ausente';
        cajaResultadoHidroxiaciloDeshidrogenasaCorta.value = 'Ausente';
        cajaResultadoCetoacilCoaTiolasaMedia.value = 'Ausente';
        cajaResultadoCarnitinaPalmitoiltransferasa1.value = 'Ausente';
        cajaResultadoCarnitinAciclcarnitinaTranslocasa.value = 'Ausente';
        cajaResultadoCarnitinaPalmitoilTransferasa2.value = 'Ausente';
        cajaResultado24DienoilCOAReductasa.value = 'Ausente';

        cajaResultadoAcidemiaIsovalerica.value = 'Ausente';
        cajaResultadoAcidemiaGlutaricaTipo1.value = 'Ausente';
        cajaResultado3Hidroxi3Metilglutarica.value = 'Ausente';
        cajaResultadoMetilcrotonilOcaborxilasa.value = 'Ausente';
        cajaResultadoAcilCOADeshidrogenasaCadenaCorta.value = 'Ausente';
        cajaResultadoAcidemiaMetilmalonica.value = 'Ausente';
        cajaResultadoAcidemiaPropionica.value = 'Ausente';
        cajaResultadoBetaCetotiolasa.value = 'Ausente';
        cajaResultadoMetilmalonicaHomocistinuria.value = 'Ausente';
        cajaResultadoAcidemiaMalonica.value = 'Ausente';
        cajaResultadoIsibutirilGlicinuria.value = 'Ausente';
        cajaResultadoMetilHidroxibutirica.value = 'Ausente';
        cajaResultado2Metilbutirilglicinuria.value = 'Ausente';
        cajaResultado3MetilGlutaconica.value = 'Ausente';

	}

	$('#tamizhemoglobinopatianeonatal').on('hidden.bs.modal', function (e) {
        limpiarTamiz();
	});

	$('#tamizhemoglobinopatianeonatal').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionTamiz(estudioEditar);
			 
		}
	});

	function edicionTamiz(estudio) {

        cajaResultadoFenotipoHemoglobina.value = estudio.resultados[0].resultado;
        cajaResultadoHipotiroidismoCongenito.value = estudio.resultados[1].resultado;
        cajaResultadoHormonaEstimulanteTN.value = estudio.resultados[2].resultado;
        cajaResultadoT4Neonatal.value = estudio.resultados[3].resultado;
        cajaResultadoHiperplaciaAdrenalCongenita.value = estudio.resultados[4].resultado;
        cajaResultado17OHPN.value = estudio.resultados[5].resultado;
        cajaResultadoGalactosemiaClasica.value = estudio.resultados[6].resultado;
        cajaResultadoGalactosaNeonatal.value = estudio.resultados[7].resultado;
        cajaResultadoGalactosaUridilTN.value = estudio.resultados[8].resultado;
        cajaResultadoFibrosisQuistica.value = estudio.resultados[9].resultado;
        cajaResultadoInmunotripsinaReactivaN.value = estudio.resultados[10].resultado;
        cajaResultadoDeficienciaBiotinidasa.value = estudio.resultados[11].resultado;
        cajaResultadoBiotinidasa.value = estudio.resultados[12].resultado;
        cajaResultadoDeficienciaGlucosa6FD.value = estudio.resultados[13].resultado;
        cajaResultadoGlucosa6FD.value = estudio.resultados[14].resultado;

        cajaResultadoFenilalanina.value = estudio.resultados[15].resultado;
        cajaResultadoTirosina.value = estudio.resultados[16].resultado;
        cajaResultadoTriptofano.value = estudio.resultados[17].resultado;
        cajaResultadoValina.value = estudio.resultados[18].resultado;
        cajaResultadoLeucina.value = estudio.resultados[19].resultado;
        cajaResultadoIsoleucina.value = estudio.resultados[20].resultado;
        cajaResultadoMetionina.value = estudio.resultados[21].resultado;
        cajaResultadoSuccinilacetona.value = estudio.resultados[22].resultado;
        cajaResultadoGlicina.value = estudio.resultados[23].resultado;
        cajaResultadoArginina.value = estudio.resultados[24].resultado;
        cajaResultadoAlanina.value = estudio.resultados[25].resultado;
        cajaResultadoCitrulina.value = estudio.resultados[26].resultado;
        cajaResultadoOrnitina.value = estudio.resultados[27].resultado;
        cajaResultadoProlina.value = estudio.resultados[28].resultado;
        cajaResultadoAcidoAspartico.value = estudio.resultados[29].resultado;
        cajaResultadoAcidoGlutamico.value = estudio.resultados[30].resultado;
        cajaResultadoLisina.value = estudio.resultados[31].resultado;
        cajaInterpretacionTamiz2.value = estudio.resultados[32].resultado;

        cajaResultadoFenilcetonuriaClasica.value = estudio.resultados[33].resultado;
        cajaResultadoHiperfenilalaninemiaVB.value = estudio.resultados[34].resultado;
        cajaResultadoBiosintesisBiopterina.value = estudio.resultados[35].resultado;
        cajaResultadoRegeneracionBiopterina.value = estudio.resultados[36].resultado;
        cajaResultadoJarabeDeMaple.value = estudio.resultados[37].resultado;
        cajaResultadoHomocistinuria.value = estudio.resultados[38].resultado;
        cajaResultadoHipermetioninemia.value = estudio.resultados[39].resultado;
        cajaResultadoTirosinemia1.value = estudio.resultados[40].resultado;
        cajaResultadoTirosinemia2.value = estudio.resultados[41].resultado;
        cajaResultadoTirosinemia3.value = estudio.resultados[42].resultado;
        cajaResultadoHiperglicinemiaNoCetosica.value = estudio.resultados[43].resultado;
        cajaResultadoArgininemia.value = estudio.resultados[44].resultado;
        cajaResultadoCitrulinemia1.value = estudio.resultados[45].resultado;
        cajaResultadoCitrulinemia2.value = estudio.resultados[46].resultado;
        cajaResultadoAxidemiaArginosuccinica.value = estudio.resultados[47].resultado;
        cajaResultadoProlinemia.value = estudio.resultados[48].resultado;
        cajaResultadoHiperornitinemia.value = estudio.resultados[49].resultado;
        cajaResultadoCarbomoilFosfatatoSintetasa.value = estudio.resultados[50].resultado;
        cajaResultadoOrnitinaCarbamoilSintetasa.value = estudio.resultados[51].resultado;

        cajaResultadoCarnitinaLibre.value = estudio.resultados[52].resultado;
        cajaResultadoAcetilcarnitina.value = estudio.resultados[53].resultado;
        cajaResultadoPropiomilcarnitina.value = estudio.resultados[54].resultado;
        cajaResultadoMalonilcarnitina.value = estudio.resultados[55].resultado;
        cajaResultadoButirilcarnitinaIsobutirilcarnitina.value = estudio.resultados[56].resultado;
        cajaResultadoHidroxibutirilcarnitina.value = estudio.resultados[57].resultado;
        cajaResultadoMetilmalonil.value = estudio.resultados[58].resultado;
        cajaResultadoIsovalerilcarnitinaM.value = estudio.resultados[59].resultado;
        cajaResultadoTiglilcarnitina.value = estudio.resultados[60].resultado;
        cajaResultadoGlutarilcarnitina.value = estudio.resultados[61].resultado;
        cajaResultadoHidroxiisovalerilcarnitina.value = estudio.resultados[62].resultado;
        cajaResultadoHexanoilcarnitina.value = estudio.resultados[63].resultado;
        cajaResultadoMetilglutarilcarnitina.value = estudio.resultados[64].resultado;
        cajaResultadoOctenoilcarnitina.value = estudio.resultados[65].resultado;
        cajaResultadoDecanoilcarnitina.value = estudio.resultados[66].resultado;
        cajaResultadoDecenoilcarnitina.value = estudio.resultados[67].resultado;
        cajaResultadoDodecanoilcarnitina.value = estudio.resultados[68].resultado;
        cajaResultadoDodecanoilcarnitina2.value = estudio.resultados[69].resultado;
        cajaResultadoDodecenoilcarnitina.value = estudio.resultados[70].resultado;
        cajaResultadoTetradecanoilcarnitina.value = estudio.resultados[71].resultado;
        cajaResultadoTetradecadienoilcarnitina.value = estudio.resultados[72].resultado;
        cajaResultado3Hidroxitetradecanoil.value = estudio.resultados[73].resultado;
        cajaResultadoPalmitoilcarnitina.value = estudio.resultados[74].resultado;
        cajaResultadoHexadecenoilcarnitina.value = estudio.resultados[75].resultado;
        cajaResultadoHidroxipalmitoleilcarnitina.value = estudio.resultados[76].resultado;
        cajaResultadoEstearoilcarnitina.value = estudio.resultados[77].resultado;
        cajaResultadoOleilcarnitina.value = estudio.resultados[78].resultado;
        cajaResultadoLinoleoilcarnitina.value = estudio.resultados[79].resultado;
        cajaResultadoHidroxiestearoilcarnitina.value = estudio.resultados[80].resultado;
        cajaResultadoHidroxioleilcarnitina.value = estudio.resultados[81].resultado;
        cajaInterpretacionTamiz4.value = estudio.resultados[82].resultado;

        cajaResultadoDeshidrogenasaCadenaMedia.value = estudio.resultados[83].resultado;
        cajaResultadoDeshidrogenasaCadenaMuyLarga.value = estudio.resultados[84].resultado;
        cajaResultadoDeshidrogenasaCadenaLarga.value = estudio.resultados[85].resultado;
        cajaResultadoProteinaTrifuncional.value = estudio.resultados[86].resultado;
        cajaResultadoTransportadorCarnitina.value = estudio.resultados[87].resultado;
        cajaResultadoDeshidrogenasaCadenaCorta.value = estudio.resultados[88].resultado;
        cajaResultadoAcidemiaGlutaricaTipoII.value = estudio.resultados[89].resultado;
        cajaResultadoHidroxiaciloDeshidrogenasaCorta.value = estudio.resultados[90].resultado;
        cajaResultadoCetoacilCoaTiolasaMedia.value = estudio.resultados[91].resultado;
        cajaResultadoCarnitinaPalmitoiltransferasa1.value = estudio.resultados[92].resultado;
        cajaResultadoCarnitinAciclcarnitinaTranslocasa.value = estudio.resultados[93].resultado;
        cajaResultadoCarnitinaPalmitoilTransferasa2.value = estudio.resultados[94].resultado;
        cajaResultado24DienoilCOAReductasa.value = estudio.resultados[95].resultado;

        cajaResultadoAcidemiaIsovalerica.value = estudio.resultados[96].resultado;
        cajaResultadoAcidemiaGlutaricaTipo1.value = estudio.resultados[97].resultado;
        cajaResultado3Hidroxi3Metilglutarica.value = estudio.resultados[98].resultado;
        cajaResultadoMetilcrotonilOcaborxilasa.value = estudio.resultados[99].resultado;
        cajaResultadoAcilCOADeshidrogenasaCadenaCorta.value = estudio.resultados[100].resultado;
        cajaResultadoAcidemiaMetilmalonica.value = estudio.resultados[101].resultado;
        cajaResultadoAcidemiaPropionica.value = estudio.resultados[102].resultado;
        cajaResultadoBetaCetotiolasa.value = estudio.resultados[103].resultado;
        cajaResultadoMetilmalonicaHomocistinuria.value = estudio.resultados[104].resultado;
        cajaResultadoAcidemiaMalonica.value = estudio.resultados[105].resultado;
        cajaResultadoIsibutirilGlicinuria.value = estudio.resultados[106].resultado;
        cajaResultadoMetilHidroxibutirica.value = estudio.resultados[107].resultado;
        cajaResultado2Metilbutirilglicinuria.value = estudio.resultados[108].resultado;
        cajaResultado3MetilGlutaconica.value = estudio.resultados[109].resultado;
    
	}

</script>