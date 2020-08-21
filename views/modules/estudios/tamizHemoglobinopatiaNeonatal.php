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
                            <div class="col-auto borde">
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
                                                <div class="col-md-8 borde text-left">
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
                                                <div class="col-md-2">
                                                    <input class="form-control" type="text" name="cajaResultadoFenotipoHemoglobina" id="cajaResultadoFenotipoHemoglobina" value="HbFA">
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2 text-center">
                                                    HbFA
                                                </div>
                                            </div>
                                            <hr style="background-color: #BBBBBB">
                                            <div class="row">
                                                <div class="col-md-4">
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
                                                    <p>Desórden en la biosíntesis de biopterina BIOPT (BS)</p>
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
		if (cajaResultadoProgesteronaP.value) {

			let estudio = {
				idmodal: 'progesterona',
				nombre: 'Amiba en fresco',
				resultados:
				[{
					nombre: 'Progesterona',
					resultado: cajaResultadoProgesteronaP.value,
					limites: ['Fase folicular 0.25 - 0.54 ng/ml', 'Fase lútea 1.5 - 20.0 ng/ml', 'Ovulación 0.25 - 6.22 ng/ml', 'Menopausia < 0.41 ng/ml']
				}],
				observaciones: '',
				costo: <?php if ($respuesta) { echo $respuesta["costo"]; } else { echo "0"; } ?> 
			}
			agregarEstudio(estudio);
			cerrarModalTamiz();
			limpiarTamiz();

		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalTamiz() {
		$(`#tamizhemoglobinopatianeonatal`).modal('toggle');
	}

	function limpiarTamiz() {
		
	}

	$('#tamizhemoglobinopatianeonatal').on('hidden.bs.modal', function (e) {
  		limpiarAmibaEnFresco();
	});

	$('#tamizhemoglobinopatianeonatal').on('show.bs.modal', function (e) {
		if (editando === true) {
			edicionTamiz(estudioEditar);
			 
		}
	});

	function edicionTamiz(estudio) {
	}

</script>