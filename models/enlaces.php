<?php

class EnlacesModels{

	public static function enlacesModel($enlaces){

		if ($enlaces == "home" && $_SESSION["rol"] == 0) {
			$module = $enlaces . ".php";
		} else if ($enlaces == "home" && $_SESSION["rol"] == 1) {
			$module = "verEstudios.php";
		} else if (
			$enlaces == "registrocliente" ||
			$enlaces == "verclientes" ||
			$enlaces == "registroUsuario" ||
			$enlaces == "verUsuarios" ||
			$enlaces == "updtCliente" ||
			$enlaces == "updtUsuario" ||
			$enlaces == "salir" ||
			$enlaces == "registroAnalisis" ||
			$enlaces == "verAnalisis" ||
			$enlaces == "capturarEstudios" ||
			$enlaces == "updtAnalisis" ||
			$enlaces == "vermedicos"  ||
			$enlaces == "registromedico" ||
			$enlaces == "updtmedico" ||
			$enlaces == "updtestudio" ||
			$enlaces == "verEstudios"){

			$module = $enlaces . ".php";
		}

		else if($enlaces == "index"){
			// $module = "index.php";
		}

		else {
			$module = "home.php";
		}

		return $module;
	}
}