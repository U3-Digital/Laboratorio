<?php

class Controller{

// 	#REGISTRO DE SOCIOS
// 	#------------------------------------
	public function registroSocio($capturador) {

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //echo "<script>console.log('".$capturador."')</script>";

      $trabajos= array(
        'empresa1'=>$_POST["empresa1"],
        'puesto1'=>$_POST["puesto1"],
        'tiempo1'=>$_POST["tiempo1"],
        'empresa2'=>$_POST["empresa2"],
        'puesto2'=>$_POST["puesto2"],
        'tiempo2'=>$_POST["tiempo2"]

      );


      $datosController = array( "nombres"=>$_POST["nombres"],
      "aPaterno"=>$_POST["aPaterno"],
      "aMaterno"=>$_POST["aMaterno"],
      "edad"=>$_POST["edad"],
      "telefono"=>$_POST["telefono"],
      "fecha"=>$_POST["fecha"],
      "escolaridad"=>$_POST["escolaridad"],
      "documento"=>$_POST["documento"],
      "trabajos"=>json_encode($trabajos),
      "clasificacion"=>$_POST["clasificacion"],
      "adicional"=>$_POST["adicional"],
      "observaciones"=>$_POST["observaciones"],
      "status"=>$_POST["status"],
      "capturador" => $capturador
    );

			$respuesta = Datos::registroSocio($datosController, "recursos");

			if($respuesta == "success"){
				echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Guardados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "registrar.php";
                      }
                    });</script> ';

			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "listado.php";
                      }
                    });</script> ';

			}
		}
	}

  # ACTUALIZA SOCIOS
    #------------------------------------
  public function actualizaSocioN(){
    if(isset($_POST["actualizar"])){

            $trabajos= array(
              'empresa1'=>$_POST["empresa1"],
              'puesto1'=>$_POST["puesto1"],
              'tiempo1'=>$_POST["tiempo1"],
              'empresa2'=>$_POST["empresa2"],
              'puesto2'=>$_POST["puesto2"],
              'tiempo2'=>$_POST["tiempo2"]

            );

            $datosController = array("id"=>$_POST["id"],
                                  "nombres"=>$_POST["nombres"],
                                  "aPaterno"=>$_POST["aPaterno"],
                                  "aMaterno"=>$_POST["aMaterno"],
                                  "edad"=>$_POST["edad"],
                                  "telefono"=>$_POST["telefono"],
                                  "escolaridad"=>$_POST["escolaridad"],
                                  "documento"=>$_POST["documento"],
                                  "fecha"=>$_POST["fecha"],
                                  "empleos"=>json_encode($trabajos),
                                  "clasificacion"=>$_POST["clasificacion"],
                                  "adicional"=>$_POST["adicional"],
                                  "status"=>$_POST["status"],
                                  "observaciones"=>$_POST["observaciones"]);

            $respuesta = Datos::actualizaSocio($datosController, "recursos");

            if ($respuesta=="ok"){

              echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Actualizados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "listaN.php";
                      }
                    });</script> ';

      }
      else{
        echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "resultados.php";
                      }
                    });</script> ';

      }

        }
  }

    public function actualizaSocio($nombre,$empleo,$clasificacion,$adicional,$telefono){

        if(isset($_POST["actualizar"])){

            $trabajos= array(
              'empresa1'=>$_POST["empresa1"],
              'puesto1'=>$_POST["puesto1"],
              'tiempo1'=>$_POST["tiempo1"],
              'empresa2'=>$_POST["empresa2"],
              'puesto2'=>$_POST["puesto2"],
              'tiempo2'=>$_POST["tiempo2"]

            );

            $datosController = array("id"=>$_POST["id"],
                                  "nombres"=>$_POST["nombres"],
                                  "aPaterno"=>$_POST["aPaterno"],
                                  "aMaterno"=>$_POST["aMaterno"],
                                  "edad"=>$_POST["edad"],
                                  "telefono"=>$_POST["telefono"],
                                  "escolaridad"=>$_POST["escolaridad"],
                                  "documento"=>$_POST["documento"],
                                  "fecha"=>$_POST["fecha"],
                                  "trabajos"=>json_encode($trabajos),
                                  "clasificacion"=>$_POST["clasificacion"],
                                  "adicional"=>$_POST["adicional"],
                                  "status"=>$_POST["status"],
                                  "observaciones"=>$_POST["observaciones"]);

            $respuesta = Datos::actualizaSocio($datosController, "recursos");

            if ($respuesta=="ok"){

              echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Actualizados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "resultados.php?idBuscarNombres='.$nombre.'&idBuscarEmpleo='.$empleo.'&idBuscarClasificacion='.$clasificacion.'&idBuscarAdiconal='.$adicional.'&idBuscarTelefono='.$telefono.'";
                      }
                    });</script> ';

      }
      else{
        echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "resultados.php?idBuscarNombres='.$nombre.'&idBuscarEmpleo='.$empleo.'&idBuscarClasificacion='.$clasificacion.'&idBuscarAdiconal='.$adicional.'&idBuscarTelefono='.$telefono.'";
                      }
                    });</script> ';

      }

        }
    }
    #--------------------------------


      //  #LISTADO DE TODOS LOS SOCIOS
  //     #------------------------------------

    public function cambiando(){
      $respuesta =Datos::buscaTodos("tabla");
       foreach ($respuesta as $row => $item){
        $nuevoresultado=array(
        'empresa1'=>$item['empleos'],
        'puesto1'=>"",
        'tiempo1'=>"",
        'empresa2'=>"",
        'puesto2'=>"",
        'tiempo2'=>""

      );
        $json=json_encode($nuevoresultado,true);
        $respuesta2 = Datos::cambiaaJson($item['id'],$json);
        //echo "<script>console.log('".$respuesta2."')</script>";
      }


    }


    public function busquedas($nombre,$empleo,$clasificacion,$adicional,$telefono){

         
            $nombrec = "%".$nombre."%";
            $empleoc  = "%".$empleo."%";
            $clasificacionc = "%".$clasificacion."%";
            $adicionalc = "%".$adicional."%";
            $telefonoc = "%".$telefono."%";
            $respuesta = Datos::buscaEspecifico($nombrec,$empleoc,$clasificacionc,$adicionalc,$telefonoc);
          
        $cont =0;

        foreach ($respuesta as $row => $item){
          $cont ++;
          echo '<tr>
                  <td>'.$item["nombres"].' '.$item["aPaterno"].' '.$item["aMaterno"].'</td>
                  <td>'.$item["edad"].'</td>
                  <td>'.$item["telefono"].'</td>
                  <td>'.$item["escolaridad"].'</td>
                  <td>'.$item["clasificacion"].'</td>
                  <td>'.$item["status"].'</td>
                  <td>
                  <a href="editar.php?idEditar='.$item["id"].'&idBuscarNombres='.$nombre.'&idBuscarEmpleo='.$empleo.'&idBuscarClasificacion='.$clasificacion.'&idBuscarAdiconal='.$adicional.'&idBuscarTelefono='.$telefono.'"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                      <a href="resultados.php?idBorrar='.$item["id"].'&idBuscarNombres='.$nombre.'&idBuscarEmpleo='.$empleo.'&idBuscarClasificacion='.$clasificacion.'&idBuscarAdiconal='.$adicional.'&idBuscarTelefono='.$telefono.'">
                        <button class="btn btn-danger method btnBorrar" data-toggle="modal" data-target="#deleteModal" data-borrar="'.$item["id"].'"><i class="fas fa-trash-alt"></i></button>
                      </a>
                    </td>
              </tr>';
        }

    }

public function listaNegra(){
            $respuesta = Datos::buscalistanegra();
        foreach ($respuesta as $row => $item){
          echo '<tr>
                  <td>'.$item["nombres"].' '.$item["aPaterno"].' '.$item["aMaterno"].'</td>
                  <td>'.$item["edad"].'</td>
                  <td>'.$item["telefono"].'</td>
                  <td>'.$item["escolaridad"].'</td>
                  <td>'.$item["clasificacion"].'</td>
                  <td>'.$item["status"].'</td>
                  <td>
                  <a href="editarN.php?idEditar='.$item["id"].'"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                      <a href="resultados.php?idBorrar='.$item["id"].'">
                      </a>
                    </td>
              </tr>';
        }

    }


    #BORRA SOCIOS
    #------------------------------------
    public function borraSocio($nombre,$empleo,$clasificacion,$adicional,$telefono){

        if (isset($_GET['idBorrar'])){
            $datosController = $_GET['idBorrar'];

            $respuesta = Datos::borrarRegistro($datosController,"recursos");
            if ($respuesta == "success") {

            echo '<script type="text/javascript">Swal.fire({
                      title: "Datos borrados",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "resultados.php?idBuscarNombres='.$nombre.'&idBuscarEmpleo='.$empleo.'&idBuscarClasificacion='.$clasificacion.'&idBuscarAdiconal='.$adicional.'&idBuscarTelefono='.$telefono.'";
                      }
                    });</script> ';

      }
      else{
        echo '<script type="text/javascript">
                    Swal.fire({
                      title: "Error al borrar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "busca.php";
                      }
                    });</script> ';

      }

        }

    }

#----------------------------------------------------------------------------------------------------
    /*
    public function listaSocios(){


        $respuesta = Datos::lista("recursos");
        $cont =0;

        foreach ($respuesta as $row => $item){
        	$cont ++;

          $fechaIngreso = $item["fecha"];

      $newIngreso = date("d-m-Y", strtotime($fechaIngreso));

        echo '<tr>
                  <td>'.$item["nombres"].' '.$item["aPaterno"].' '.$item["aMaterno"].'</td>
                  <td>'.$item["edad"].'</td>
                  <td>'.$newIngreso.'</td>
                  <td>'.$item["telefono"].'</td>
                  <td>'.$item["status"].'</td>
                  <td>
                  <a href="editar.php?idEditar='.$item["id"].'"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                      <a href="listado.php?idBorrar='.$item["id"].'">
                        <button class="btn btn-danger btnBorrar" data-toggle="modal" data-target="#deleteModal" data-borrar="'.$item["id"].'"><i class="fas fa-trash-alt"></i></button>
                      </a>
                  </td>
                </tr>';
        }

    }

	public function registroCoach(){

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$datosController = array( "nombre"=>$_POST["nombre"],
									  "nick"=>$_POST["nick"],
								      "aPaterno"=>$_POST["aPaterno"],
								      "aMaterno"=>$_POST["aMaterno"],
								      "email"=>$_POST["email"],
								      "telefono"=>$_POST["telefono"],
								      "activo"=>$_POST["activo"],
								  	  "fechaIngreso" => $_POST["fechaIngreso"]);

			$respuesta = Datos::registroCoach($datosController, "coachs");

			if($respuesta == "success"){
				echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Guardados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "coaches.php";
                      }
                    });</script> ';

			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "coaches.php";
                      }
                    });</script> ';

			}
		}
	}

    public function actualizaCoach(){

        if(isset($_POST["actualizar"])){

            $datosController = array("id"=>$_POST["id"],
                                  "nombre"=>$_POST["nombre"],
                                  "aPaterno"=>$_POST["aPaterno"],
                                  "aMaterno"=>$_POST["aMaterno"],
                                  "telefono"=>$_POST["telefono"],
                                  "email"=>$_POST["email"],
                                  "activo"=>$_POST["activo"],
                                  "fechaIngreso"=>$_POST["fechaIngreso"],
                                  "nickName"=>$_POST["nickName"]);

            $respuesta = Datos::actualizaCoach($datosController, "coachs");

            if ($respuesta=="ok"){
				echo '<script type="text/javascript">Swal.fire({
	                      title: "Datos Guardados!",
	                      type: "success",
	                      showCancelButton: false
	                    })
	                    .then((value) => {
	                      if (value) {
	                        window.location.href = "coaches.php";
	                      }
	                    });</script> ';
			}
			else{
					echo '<script type="text/javascript">Swal.fire({
	                      title: "Error al guardar!",
	                      type: "error",
	                      showCancelButton: false
	                    })
	                    .then((value) => {
	                      if (value) {
	                        window.location.href = "coaches.php";
	                      }
	                    });</script> ';
			}

        }
    }


    public function borraCoach(){
        if (isset($_GET['idBorrar'])){
            $datosController = $_GET['idBorrar'];

            $respuesta = Datos::borrarRegistro($datosController,"coachs");
            if ($respuesta == "success"){
            echo '<script type="text/javascript">Swal.fire({
                      title: "Registro Borrado!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "coaches.php";
                      }
                    });</script> ';

			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al borrar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "coaches.php";
                      }
                    });</script> ';

			}

        }
    }


    public function listaCoaches(){

        $respuesta = Datos::lista("coachs");
        $cont =0;

        foreach ($respuesta as $row => $item){
        	$cont ++;
        	echo '<tr>
        		  <td>'.$item["nickName"].'</td>
                  <td>'.$item["Nombre"].' '.$item["aPaterno"].'</td>
                  <td>'.$item["telefono"].'</td>
                  <td>'.$item["email"].'</td>
                  <td>'.$item["fechaIngreso"].'</td>
                  <td><a href="editCoach.php?idEditar='.$item["id"].'"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-danger btnBorrar" data-toggle="modal" data-target="#deleteModal" data-borrar="'.$item["id"].'"><i class="fas fa-trash-alt"></i></button>
                      <a href="coaches.php?idBorrar='.$item["id"].'"><button id="'.$item["id"].'" name="'.$item["id"].'" hidden>X</button></a>
                  </td>
                </tr>';
        }

    }

	public function registroPaquete(){

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$datosController = array( "nombre"=>$_POST["nombre"],
								      "costo"=>$_POST["costo"],
								      "clases"=>$_POST["clases"],
								      "vigencia"=>$_POST["vigencia"]);

			$respuesta = Datos::registroPaquete($datosController, "paquetes");

			if($respuesta == "success"){
				echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Guardados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "paquetes.php";
                      }
                    });</script> ';

			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "paquetes.php";
                      }
                    });</script> ';
			}
		}
	}

    public function actualizaPaquete(){

        if(isset($_POST["actualizar"])){

            $datosController = array("id"=>$_POST["id"],
                                  "nombre"=>$_POST["nombre"],
                                  "costo"=>$_POST["costo"],
                                  "clases"=>$_POST["clases"],
                                  "vigencia"=>$_POST["vigencia"]);

            $respuesta = Datos::actualizaPaquete($datosController, "paquetes");

            if ($respuesta=="ok"){
            	echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Guardados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "paquetes.php";
                      }
                    });</script> ';
			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "paquetes.php";
                      }
                    });</script> ';
			}

        }
    }

    public function borraPaquete(){
        if (isset($_GET['idBorrar'])){
            $datosController = $_GET['idBorrar'];

            $respuesta = Datos::borrarRegistro($datosController,"paquetes");
            if ($respuesta == "success"){
            echo '<script type="text/javascript">Swal.fire({
                      title: "Registro Borrado!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "paquetes.php";
                      }
                    });</script> ';

			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al borrar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "paquetes.php";
                      }
                    });</script> ';

			}

        }
    }

    public function listaPaquetes(){

        $respuesta = Datos::lista("paquetes");
        $cont =0;

        foreach ($respuesta as $row => $item){
        	$cont ++;

        echo '<tr>
                  <td>'.$item["nombre"].'</td>
                  <td>'.$item["costo"].'</td>
                  <td>'.$item["clases"].'</td>
                  <td>'.$item["caducaDias"].'</td>
                  <td><a href="editPaquete.php?idEditar='.$item["id"].'"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                      <button class="btn btn-danger btnBorrar" data-toggle="modal" data-target="#deleteModal" data-borrar="'.$item["id"].'"><i class="fas fa-trash-alt"></i></button>
                      <a href="paquetes.php?idBorrar='.$item["id"].'"><button id="'.$item["id"].'" name="'.$item["id"].'" hidden>X</button></a>
                  </td>
                </tr>';
        }

    }

	public function compraPaquete(){

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $clasesRecib = $_POST["clases"] + $_POST["clasesDisp"];
      $caducidad =0;

      if ($clasesRecib <= 25 ) $caducidad = 30;
      if ($clasesRecib >= 26 && $clasesRecib <= 35  ) $caducidad = 50;
      if ($clasesRecib >= 36 && $clasesRecib <= 45  ) $caducidad = 60;
      if ($clasesRecib >= 46 ) $caducidad = 70;

			$datosController = array( "socio"=>$_POST["socio"],
								      "paquete"=>$_POST["paquete"],
                      //"clasesDisp" => $_POST["clasesDisp"],
								      "costo"=>$_POST["costo"],
								      "clases"=>$_POST["clases"],
								      "caducidad"=>$caducidad
								    );

			$respuesta = Datos::compraPaquete($datosController, "ventas");

			if($respuesta == "success"){
				echo '<script type="text/javascript">Swal.fire({
                      title: "Venta Exitosa!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "socios.php";
                      }
                    });</script> ';

			}
			else{
				echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "socios.php";
                      }
                    });</script> ';
			}
		}
	}


    public function listaCombo($tabla){

        $respuesta = Datos::lista($tabla);

        echo '<option> - seleccione - </option>';

        foreach ($respuesta as $row => $item){
        	echo '<option value="'.$item["id"].'">'.$item["nombre"].'</option>';

        }

        echo '</select>';

    }

    public function escolaridadCombo(){

        $respuesta = Datos::escolaridades();

        echo '<option> - seleccione - </option>';

        foreach ($respuesta as $row => $item){
          echo '<option value="'.$item["escolaridad"].'">'.$item["escolaridad"].'</option>';

        }

        echo '</select>';

    }

    public function clasificacionCombo(){

        $respuesta = Datos::clasificacion();

        echo '<option> - seleccione - </option>';

        foreach ($respuesta as $row => $item){
          echo '<option value="'.$item["escolaridad"].'">'.$item["escolaridad"].'</option>';

        }

        echo '</select>';

    }

    public function buscaPaqueteAjax($tabla, $codigo){

        $res = Datos::buscaPaqueteAjax($tabla, $codigo);

        echo $res[0];
        echo " || ";
        echo $res[1];
        echo " || ";
        echo $res[2];

    }


    public function buscaClasesAjax($tabla, $codigo){

        $res = Datos::buscaClasesAjax($tabla, $codigo);

        echo $res[0];

    }
*/
}//Clase principal

?>