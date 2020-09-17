<?php

class Ingreso {
    public $intentos = 0;

	public function ingresoController(){

        if(isset($_POST["usuarioIngreso"])){

            $datosController = array("usuario"=>$_POST["usuarioIngreso"],
                                    "password"=>$_POST["passwordIngreso"]);
            $respuesta = Datos::ingresoModel($datosController, "usuarios");

            $usuarioActual = $_POST["usuarioIngreso"];


                if($respuesta["email"] == $_POST["usuarioIngreso"] && password_verify($_POST["passwordIngreso"], $respuesta["password"]) && $respuesta["activo"] === "s"){

                    session_start();

                    $_SESSION["validar"] = true;
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["nombre"] ="".$respuesta["nombres"]." ".$respuesta["apellidos"]."";
                    $_SESSION["rol"] = $respuesta["rol"];

                    header("location:views/modules/inicio.php?action=home");

                }

                else{

                    echo '<div class="alert alert-danger">Verifique Usuario/Password</div>';

                }

	}

}
}