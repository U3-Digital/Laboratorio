<?php

class Controller{

    public function actualizaCliente(){


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $datosController = array( 
                "id"=>$_POST["id"],
                "nombre" =>$_POST["cajaNombres"],
                "apellidos" =>$_POST["cajaApellidos"],
                "email" => $_POST["cajaEmail"]
            );

            $respuesta = Datos::mdlActualizaCliente($datosController, "clientes");



            if($respuesta == "success"){
                echo'<script type="text/javascript">
                    alert("Registro Actualizado");
                    window.location.href="listaClientes.php";
                    </script>';

            }

            else{
                echo'<script type="text/javascript">
                    alert("Error!");
                    window.location.href="listaChoferes.php";
                    </script>';


            }

        }

    }


    public function borrarCliente(){
        if (isset($_GET['idBorrar'])){
            //echo'<script type="text/javascript">alert("'.$_GET['idBorrar'].'");</script>';
            $datosController = $_GET['idBorrar'];
            $respuesta = Datos::mdlborrarCliente($datosController,"clientes");
            if ($respuesta == "success"){
                echo '<script type="text/javascript">Swal.fire({
                      title: "Registro Eliminado!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "inicio.php?action=inicio";
                      }
                    });</script> ';
            }
            else{
                echo'<script type="text/javascript">alert("Error!");</script>';
            }
        }
    }
  public function listaClientes(){
    $respuesta = Datos::mdlListaClientes("clientes");
        $cont =0;

        foreach ($respuesta as $row => $item){
          $cont ++;
          echo '<tr>
                  <td>'.$cont.'</td>
                  <td>'.$item["nombre"].'</td>
                  <td>'.$item["apellidos"].'</td>
                  <td>'.$item["email"].'</td>
                  <td><a href="updtCliente.php?idEditar='.$item["idCliente"].'"><button class="btn btn-warning">Editar</button></a></td>
                  <td><a href="inicio.php?action=verclientes&idBorrar='.$item["idCliente"].'" ><button class="btn btn-danger">Borrar</button></a></td>
                </tr>';
        }
  }

  public function registrarClienteController(){
    if(isset($_POST["cajaNombres"])){

      $datosController= array(
        "nombre" =>$_POST["cajaNombres"],
        "apellidos" =>$_POST["cajaApellidos"],
        "email" => $_POST["cajaEmail"]
      );

      $respuesta = Datos::registrarUsuarioModel($datosController,"clientes");
      if ($respuesta == "success") {
        echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Guardados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "index.php?action=inicio";
                      }
                    });</script> ';
      }else{
        echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "index.php?action=inicio";
                      }
                    });</script> ';
      }
    }
    
  }

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


    public function ctlRegistrarUsuario() {
        if (isset($_POST["submit"])) {
            $datosController = array(
                "nombres" => $_POST["cajaNombres"],
                "apellidos" => $_POST["cajaApellidos"],
                "correo" => $_POST["cajaEmail"],
                "password" => password_hash( $_POST["cajaPassword"], PASSWORD_DEFAULT),
                "foto" => $_POST["inputFile"],
                "rol" => $_POST["selectRol"],
                "activo" => $_POST["selectActivo"]
            );
            $respuesta = Datos::mdlRegistrarUsuario($datosController, "usuarios");

            if ($respuesta == "success") {
                    echo '<script type="text/javascript">Swal.fire({
                                  title: "Datos Guardados!",
                                  type: "success",
                                  showCancelButton: false
                                })
                                .then((value) => {
                                  if (value) {
                                    window.location.href = "inicio.php?action=registroUsuario";
                                  }
                                });</script> ';
            } else {
                echo '<script type="text/javascript">Swal.fire({
                              title: "Error al guardar!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=regiustroUsuario";
                              }
                            });</script> ';
            }

        }

    }

    public function ctlRegistraCliente() {
      if(isset($_POST["cajaNombres"])){

      $datosController= array(
        "nombre" =>$_POST["cajaNombres"],
        "apellidos" =>$_POST["cajaApellidos"],
        "email" => $_POST["cajaEmail"]
      );

      $respuesta = Datos::registrarClienteModel($datosController,"clientes");
      if ($respuesta == "success") {
        echo '<script type="text/javascript">Swal.fire({
                      title: "Datos Guardados!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "inicio.php?action=home";
                      }
                    });</script> ';
      }else{
        echo '<script type="text/javascript">Swal.fire({
                      title: "Error al guardar!",
                      type: "error",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "inicio.php?action=home";
                      }
                    });</script> ';
      }
    }

    }

}//Clase principal

?>