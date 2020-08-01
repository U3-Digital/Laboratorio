<?php

class EnlacesModels{

	public static function enlacesModel($enlaces){

		if ($enlaces == "home" ||
			$enlaces == "registrocliente" ||
			$enlaces == "verclientes" ||
			$enlaces == "registroUsuario" ||
			$enlaces == "verUsuarios" ||
			$enlaces == "updtCliente" ||
			$enlaces == "salir"){
			
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