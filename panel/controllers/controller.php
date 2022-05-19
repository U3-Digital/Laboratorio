<?php

class Controller {


  public function borrar($nombre) {
    $respuesta = Datos::borrar($nombre);
    return $respuesta;
  }

  public static function resumenGrafica(){
    date_default_timezone_set("America/chihuahua");
    
     $respuesta = Datos::mdlgrafica("estudios");
        $meses = array();
        $cant = array();
        foreach ($respuesta as $row => $item){
            array_push($meses, $item["Mes"]);
            $num = number_format($item["Total"], 2, '.', '');
            array_push($cant, $num);

        }

        echo '<script type="text/javascript">'
            .'var ctx = document.getElementById("myBarChart");'
            .'var myLineChart = new Chart(ctx, {'
            ." type: 'line',"
            .'data: {'
            .' labels:'.json_encode($meses).','
            .'datasets: [{'
            .'label: "$",'
            .'lineTension: 0.3,'
            .'backgroundColor: "rgba(2,117,216,1)",'
            .'borderColor: "rgba(2,117,216,1)",'
            .'pointRadius: 5,'
            .'pointBackgroundColor: "rgba(2,117,216,1)",'
            .'pointBorderColor: "rgba(255,255,255,0.8)",'
            .'pointHoverRadius: 5,'
            .'pointHoverBackgroundColor: "rgba(2,117,216,1)",'
            .'pointHitRadius: 20,'
            .'pointBorderWidth: 2,'
            .'data:'. json_encode($cant,JSON_NUMERIC_CHECK).','
            .'}],'
            .'},'
            .'options: {'
            .'legend: {'
            .'display: false'
            .'}'
            .'}'
            .'});'
            .'myLineChart.aspectRatio = 0;'
            .'</script>';


  }


  

    public static function listaEstudios(){
      $respuesta = Datos::mdlListaEstudios("estudios");
          $cont =0;

          foreach ($respuesta as $row => $item){
            $resultados = json_decode($item["resultados"]);
            $Estudios = "";
            foreach ($resultados as $row2 => $item2) {
              if($Estudios !=""){
                $Estudios = $Estudios.",".$item2->nombre."";
              }else{
                $Estudios = $Estudios."".$item2->nombre."";
              }
              
            }
            $cont ++;
            echo '<tr>
                    <td>'.$cont.'</td>
                    <td>'.$item["cliente"].'</td>
                    <td>'.$item["medico"].'</td>
                    <td>'.$item["fecha"].'</td>
                    <td>'.$item["responsable"].'</td>
                    <td>'.$Estudios.'</td>
                    <td>'.$item["costo"].'</td>
                    <td><a href="inicio.php?action=updtestudio&idEditar='.$item["idEstudio"].'"><button class="btn btn-warning">Editar</button></a></td>
                    ';
            if ($_SESSION["rol"] == 0) {
              echo '<td><a href="inicio.php?action=verEstudios&idBorrar='.$item["idEstudio"].'" ><button class="btn btn-danger">Borrar</button></a></td>
              </tr>';
            } else {
              echo '</tr>';
            }
          }  
    }
    public static function borrarEstudio(){
      if (isset($_GET['idBorrar'])){
            //echo'<script type="text/javascript">alert("'.$_GET['idBorrar'].'");</script>';
            $datosController = $_GET['idBorrar'];
            $respuesta = Datos::mdlborrarEstudios($datosController,"estudios");
            if ($respuesta == "success"){
                echo '<script type="text/javascript">Swal.fire({
                      title: "Registro Eliminado!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "inicio.php?action=verEstudios";
                      }
                    });</script> ';
            }
            else{
                echo'<script type="text/javascript">alert("Error!");</script>';
            }
        }
    }
    public static function ctlsaveEstudio($valores){
      if(isset($valores["cliente"])){

        $datosController= array(
          "cliente" =>$valores["cliente"],
          "email" => $valores["emailCliente"],
          "medico" =>$valores["medico"],
          "fecha" =>$valores["fecha"],
          "costo" =>$valores["costo"],
          "responsable" => $valores["responsable"],
          "resultados" => $valores["resultado"]
        );
        //print_r($datosController);
        $respuesta = Datos::mdlRegistraEstudio($datosController,"estudios");
        return $respuesta;
      }
    }

    public static function ctlBuscaCliente($id){
      $respuesta = Datos::mdlCliente($id,"clientes");

      return $respuesta;
    }

    public static function ctlBuscaClientes(){
      $respuesta = Datos::mdlClientes("clientes");

      foreach ($respuesta as $row => $item){
          echo  '<option value="'.$item["idCliente"].'">'.$item["nombre"].' '.$item["apellidos"].'</option>';
      }
    }

    public static function actualizaCliente($id){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $datosController = array(
                "id"=>$id,
                "nombre" =>$_POST["cajaNombres"],
                "apellidos" =>$_POST["cajaApellidos"],
                "email" => $_POST["cajaEmail"]
            );

            $respuesta = Datos::mdlActualizaCliente($datosController, "clientes");



            if($respuesta == "success"){
                 echo '<script type="text/javascript">Swal.fire({
                      title: "Registro Actualizado!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "inicio.php?action=verclientes";
                      }
                    });</script> ';

            }

            else{
                echo'<script type="text/javascript">
                    alert("Error!");
                    window.location.href="listaChoferes.php";
                    </script>';


            }

        }

    }


    public static function ctlBuscaMedicos(){
      $respuesta = Datos::mdlListaMedicos("medicos");

      foreach ($respuesta as $row => $item){
          echo  '<option value="'.$item["idMedico"].'">'.$item["nombre"].' '.$item["apellidos"].'</option>';
      }
    }

    public static function ctlBuscaMedico($id){
      $respuesta = Datos::mdlMedico($id,"medicos");

      return $respuesta;
    }

    public static function ctlResumenDiario($hoy){
      $respuesta = Datos::mdlResumenDiario($hoy,"estudios");

      return $respuesta;
    }

    public static function ctlResumenMensual($fechas){
    
      if(isset($fechas["fecha"])){
        $datosController = array(
                  "hoy" =>$fechas["fecha"],
                  "mes" =>$fechas["inicioMes"]
              );
        $respuesta = Datos::mdlResumenMensual($datosController, "estudios");
        return $respuesta;
      }
    }


    public static function listaMedicos(){
      $respuesta = Datos::mdlListaMedicos("medicos");
          $cont =0;

          foreach ($respuesta as $row => $item){
            $cont ++;
            echo '<tr>
                    <td>'.$cont.'</td>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["apellidos"].'</td>
                    <td>'.$item["email"].'</td>
                    <td><a href="inicio.php?action=updtmedico&idEditar='.$item["idMedico"].'"><button class="btn btn-warning">Editar</button></a></td>';
                  
              if ($_SESSION["rol"] == 0) {
                echo '<td><a href="inicio.php?action=vermedicos&idBorrar='.$item["idMedico"].'" ><button class="btn btn-danger">Borrar</button></a></td>
                </tr>';
              } else {
                echo '</tr>';
              }
          }
    }

    public static function borrarMedico(){
        if (isset($_GET['idBorrar'])){
            //echo'<script type="text/javascript">alert("'.$_GET['idBorrar'].'");</script>';
            $datosController = $_GET['idBorrar'];
            $respuesta = Datos::mdlborrarMedico($datosController,"medicos");
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

    public static function actualizaMedico($id){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $datosController = array(
                "id"=>$id,
                "nombre" =>$_POST["cajaNombres"],
                "apellidos" =>$_POST["cajaApellidos"],
                "email" => $_POST["cajaEmail"]
            );

            $respuesta = Datos::mdlActualizaMedico($datosController, "medicos");



            if($respuesta == "success"){
                 echo '<script type="text/javascript">Swal.fire({
                      title: "Registro Actualizado!",
                      type: "success",
                      showCancelButton: false
                    })
                    .then((value) => {
                      if (value) {
                        window.location.href = "inicio.php?action=vermedicos";
                      }
                    });</script> ';

            }

            else{
                echo'<script type="text/javascript">
                    alert("Error!");
                    window.location.href = "inicio.php?action=vermedicos";
                    </script>';


            }

        }

    }

    public static function borrarCliente(){
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
    public static function listaClientes(){
      $respuesta = Datos::mdlListaClientes("clientes");
          $cont =0;

          foreach ($respuesta as $row => $item){
            $cont ++;
            echo '<tr>
                    <td>'.$cont.'</td>
                    <td>'.$item["nombre"].'</td>
                    <td>'.$item["apellidos"].'</td>
                    <td>'.$item["email"].'</td>
                    <td><a href="inicio.php?action=updtCliente&idEditar='.$item["idCliente"].'"><button class="btn btn-warning">Editar</button></a></td>';
            
            if ($_SESSION["rol"] == 0) {
              echo '<td><a href="inicio.php?action=verclientes&idBorrar='.$item["idCliente"].'" ><button class="btn btn-danger">Borrar</button></a></td>
              </tr>';
            } else {
              echo '</tr>';
            }
          }
    }

    public static function registrarClienteController(){
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

    public static function ctlRegistrarUsuario() {
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
                                  title: "¡Usuario guardado exitosamente!",
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
                              title: "¡Error al guardar!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=registroUsuario";
                              }
                            });</script> ';
            }

        }

    }

    public static function ctlListaUsuarios() {
        $respuesta = Datos::mdlListaUsuarios("usuarios");
        $contador = 0;

        foreach ($respuesta as $row => $item) {
          $contador++;

          $rol = "";
          $activo = "";

          if ($item["rol"] == 0) {
              $rol = "Administrador";
          } else {
              $rol = "Usuario";
          }

          if ($item["activo"] == "s") {
              $activo = "Si";
          } else {
              $activo = "No";
          }

            echo '<tr>
                    <td>' . $item["idUsuario"] . '</td>
                    <td>' . $item["nombres"] .'</td>
                    <td>' . $item["apellidos"] .'</td>
                    <td>' . $item["email"] . '</td>
                    <td>' . $rol . '</td>
                    <td>' . $activo . '</td>
                    <td>

                          <a href="inicio.php?action=updtUsuario&idUsuario=' . $item["idUsuario"] . '">
                              <button class="btn btn-warning">
                              <i class="fas fa-pencil-alt" style="color: black;"></i>
                              </button>
                          </a>

                    </td>
                    <td>
                        <a href="inicio.php?action=verUsuarios&idBorrar=' . $item["idUsuario"] . '">
                            <button class="btn btn-danger">
                                <i class="fas fa-trash" style="color: white;"></i>
                            </button>
                        </a>
                    </td>
                </tr>';

        }

    }

    public static function ctlActualizarUsuario($idUsuario) {
        if (isset($_POST["submit"])) {

            if ($_POST["cajaPassword"] != "") {
                $datosController = array(
                  "idUsuario" => $idUsuario,
                  "nombres" => $_POST["cajaNombres"],
                  "apellidos" => $_POST["cajaApellidos"],
                  "correo" => $_POST["cajaEmail"],
                  "password" => password_hash( $_POST["cajaPassword"], PASSWORD_DEFAULT),
                  "foto" => $_POST["inputFile"],
                  "rol" => $_POST["selectRol"],
                  "activo" => $_POST["selectActivo"]
                );
            } else {
                $datosController = array(
                  "idUsuario" => $idUsuario,
                  "nombres" => $_POST["cajaNombres"],
                  "apellidos" => $_POST["cajaApellidos"],
                  "correo" => $_POST["cajaEmail"],
                  "foto" => $_POST["inputFile"],
                  "rol" => $_POST["selectRol"],
                  "activo" => $_POST["selectActivo"]
                );
            }

            $respuesta = Datos::mdlActualizarUsuario($datosController, "usuarios");

            if ($respuesta == "success") {
                    echo '<script type="text/javascript">Swal.fire({
                                  title: "¡Usuario actualizado exitosamente!",
                                  type: "success",
                                  showCancelButton: false
                                })
                                .then((value) => {
                                  if (value) {
                                    window.location.href = "inicio.php?action=verUsuarios";
                                  }
                                });</script> ';
            } else {
                echo '<script type="text/javascript">Swal.fire({
                              title: "¡Error al actualizar!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=updtUsuario";
                              }
                            });</script> ';
            }

        }
    }

    public static function ctlBorrarUsuario () {
        if (isset($_GET["idBorrar"])) {
            $idUsuario = $_GET["idBorrar"];

            $respuesta = Datos::mdlBorrarUsuario($idUsuario, "usuarios");

            if ($respuesta == "success") {
                    echo '<script type="text/javascript">Swal.fire({
                                  title: "¡Usuario borrado exitosamente!",
                                  type: "success",
                                  showCancelButton: false
                                })
                                .then((value) => {
                                  if (value) {
                                    window.location.href = "inicio.php?action=verUsuarios";
                                  }
                                });</script> ';
            } else {
                echo '<script type="text/javascript">Swal.fire({
                              title: "¡Error al borrar!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=verUsuarios";
                              }
                            });</script> ';
            }

        }
    }

    public static function cltRegistraMedico () {
      if(isset($_POST["cajaNombres"])){
        $datosController= array(
          "nombre" =>$_POST["cajaNombres"],
          "apellidos" =>$_POST["cajaApellidos"],
          "email" => $_POST["cajaEmail"]
        );  

        $respuesta = Datos::registrarMedicoModel($datosController,"medicos");
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
    public static function ctlRegistraCliente() {
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

    public static function ctlRegistrarAnalisis($nombre, $costo) {
      

            $datosController = array(
                "nombre" => $nombre,
                "costo" => $costo
            );

            $respuesta = Datos::mdlRegistrarAnalisis($datosController, "catanalisis");

            if ($respuesta == "success") {
                    echo '<script type="text/javascript">Swal.fire({
                                  title: "¡Análisis agregado exitosamente!",
                                  type: "success",
                                  showCancelButton: false
                                })
                                .then((value) => {
                                  if (value) {
                                    window.location.href = "inicio.php?action=home";
                                  }
                                });</script> ';
            } else {
                echo '<script type="text/javascript">Swal.fire({
                              title: "¡Error al agregar el análisis!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=verAnalisis";
                              }
                            });</script> ';
            }

        
    }

    public static function ctlListaAnalisis() {
        $respuesta = Datos::mdlListaAnalisis("catanalisis");

        $contador = 0;

        foreach ($respuesta as $row => $item) {
            $contador++;

            echo '<tr>
                    <td>' . $item["idAnalisis"] .'</td>
                    <td>' . $item["nombre"] . '</td>
                    <td>' . $item["costo"] . '</td>
                    
                    ';
            if ($_SESSION["rol"] == 0) {
              echo '<td>
                        <a href="inicio.php?action=updtAnalisis&idAnalisis='. $item["idAnalisis"] . '">
                            <button class="btn btn-warning">
                                <i class="fas fa-pencil-alt" style="color: black;"></i>
                            </button>
                        </a>
                    </td>';
              echo '<td>
                      <a href="inicio.php?action=verAnalisis&idBorrar='. $item["idAnalisis"] . '">
                          <button class="btn btn-danger">
                              <i class="fas fa-trash" style="color: white;"></i>
                          </button>
                      </a>
                    </td>
                  </tr>';
            } else {
              echo '</tr>';
            }

        }

    }

    public static function ctlActualizarAnalisis($idAnalisis) {
        if (isset($_POST["submit"])) {

            $datosController = array(
                "idAnalisis" => $idAnalisis,
                "costo" => $_POST["cajaCosto"]
            );

            $respuesta = Datos::mdlActualizarAnalisis($datosController, "catanalisis");

            if ($respuesta == "success") {
                    echo '<script type="text/javascript">Swal.fire({
                                  title: "¡Análisis actualizado exitosamente!",
                                  type: "success",
                                  showCancelButton: false
                                })
                                .then((value) => {
                                  if (value) {
                                    window.location.href = "inicio.php?action=verAnalisis";
                                  }
                                });</script> ';
            } else {
                echo '<script type="text/javascript">Swal.fire({
                              title: "¡Error al actualizar!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=updtAnalisis";
                              }
                            });</script> ';
            }


        }
    }

    public static function ctlBorrarAnalisis() {
        if (isset($_GET["idBorrar"])) {
            $idAnalisis = $_GET["idBorrar"];

            $respuesta = Datos::mdlBorrarAnalisis($idAnalisis, "catanalisis");

            if ($respuesta == "success") {
                    echo '<script type="text/javascript">Swal.fire({
                                  title: "¡Análisis borrado exitosamente!",
                                  type: "success",
                                  showCancelButton: false
                                })
                                .then((value) => {
                                  if (value) {
                                    window.location.href = "inicio.php?action=verAnalisis";
                                  }
                                });</script> ';
            } else {
                echo '<script type="text/javascript">Swal.fire({
                              title: "¡Error al borrar!",
                              type: "error",
                              showCancelButton: false
                            })
                            .then((value) => {
                              if (value) {
                                window.location.href = "inicio.php?action=verAnalisis";
                              }
                            });</script> ';
            }
        }
    }

    public static function ctlBuscaEstudios(){
        $respuesta = Datos::mdlEstudios("catanalisis");

        foreach ($respuesta as $row => $item){
            echo  '<option value="'.$item["nombre"].'">'.$item["nombre"].'</option>';
        }
    }

    public static function ctlBuscarEstudio($nombreAnalisis) {
        $respuesta = Datos::mdlBuscarEstudio($nombreAnalisis, "catanalisis");

        return $respuesta;
    }

    public static function ctlActualizarEstudio($idEstudio, $estudio) {
        $datosController = array("idEstudio" => $idEstudio,
                                 "cliente" => $estudio["cliente"],
                                 "medico" => $estudio["medico"],
                                 "emailCliente" => $estudio["emailCliente"],
                                 "costo" => $estudio["costo"],
                                 "resultado" => $estudio["resultado"]);
                                 
        $respuesta = Datos::mdlActualizarEstudio($datosController, "estudios");
        return $respuesta;
    }

    // public static function

}//Clase principal

?>