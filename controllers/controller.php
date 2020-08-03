<?php

class Controller {


    public function ctlBuscaCliente($id){
      $respuesta = Datos::mdlCliente($id,"clientes");

      return $respuesta;
    }

    public function ctlBuscaClientes(){
      $respuesta = Datos::mdlClientes("clientes");

      foreach ($respuesta as $row => $item){
          echo  '<option value="'.$item["idCliente"].'">'.$item["nombre"].' '.$item["apellidos"].'</option>';
      }
    }

    public function actualizaCliente($id){

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
                    <td><a href="inicio.php?action=updtCliente&idEditar='.$item["idCliente"].'"><button class="btn btn-warning">Editar</button></a></td>
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

    public function ctlListaUsuarios() {
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

    public function ctlActualizarUsuario($idUsuario) {
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

    public function ctlBorrarUsuario () {
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

    public function ctlRegistrarAnalisis() {
        if (isset($_POST["submit"])) {

            $datosController = array(
                "nombre" => $_POST["cajaNombre"],
                "costo" => $_POST["cajaCosto"]
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
    }

    public function ctlListaAnalisis() {
        $respuesta = Datos::mdlListaAnalisis("catanalisis");

        $contador = 0;

        foreach ($respuesta as $row => $item) {
            $contador++;

            echo '<tr>
                    <td>' . $item["idAnalisis"] .'</td>
                    <td>' . $item["nombre"] . '</td>
                    <td>' . $item["costo"] . '</td>
                    <td>
                        <a href="inicio.php?action=updtAnalisis&idAnalisis='. $item["idAnalisis"] . '">
                            <button class="btn btn-warning">
                                <i class="fas fa-pencil-alt" style="color: black;"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="inicio.php?action=verAnalisis&idBorrar='. $item["idAnalisis"] . '">
                            <button class="btn btn-danger">
                                <i class="fas fa-trash" style="color: white;"></i>
                            </button>
                        </a>
                    </td>
                </tr>';

        }

    }

    public function ctlActualizarAnalisis($idAnalisis) {
        if (isset($_POST["submit"])) {

            $datosController = array(
                "idAnalisis" => $idAnalisis,
                "nombre" => $_POST["cajaNombre"],
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

    public function ctlBorrarAnalisis() {
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

    public function ctlBuscaEstudios(){
        $respuesta = Datos::mdlEstudios("catanalisis");

        foreach ($respuesta as $row => $item){
            echo  '<option value="'.$item["nombre"].'">'.$item["nombre"].'</option>';
        }    
    }

    public function ctlBuscarEstudio($nombreAnalisis) {
        $respuesta = Datos::mdlBuscarEstudio($nombreAnalisis, "catanalisis");

        return $respuesta;
    }

    public function ctlBuscarEstudios() {
        $respuesta = Datos::mdlBuscarEstudos("estudios");

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td>' . $item["idEstudio"] . '</td>
                    <td>' . $item["cliente"] . '</td>
                    <td>' . $item["medico"] . '</td>
                    <td>' . $item["fecha"] . '</td>
                    <td>' . $item["responsable"] . '</td>
                    <td>' . $item["estudios"] . '</td>
                    <td>' . $item["costo"] . '</td>
                    <td>
                        <a href="inicio.php?action=updtAnalisis&idAnalisis='. $item["idAnalisis"] . '">
                            <button class="btn btn-warning">
                                <i class="fas fa-pencil-alt" style="color: black;"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="inicio.php?action=verAnalisis&idBorrar='. $item["idAnalisis"] . '">
                            <button class="btn btn-danger">
                                <i class="fas fa-trash" style="color: white;"></i>
                            </button>
                        </a>
                    </td>
                  </tr>'
        }
    }

    // public function 

}//Clase principal

?>