<?php

class EnlacesModels{

	public static function enlacesModel($enlaces){

		if ($enlaces == "home" ||
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
			$enlaces == "updtAnalisis"){
			
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