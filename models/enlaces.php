<?php

class EnlacesModels{

	public static function enlacesModel($enlaces){

		if ($enlaces == "home" ||
			$enlaces == "registrocliente" ||
			$enlaces == "registroUsuario"){
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