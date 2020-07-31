<?php

class EnlacesModels{

	public static function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "ingreso" ||
		   //$enlaces == "pagina1" ||
		   //$enlaces == "alta1" ||
		   $enlaces == "registroUsuario" ||
		   $enlaces == "registrocliente" ||
		   $enlaces == "verclientes" ||
		   $enlaces == "lostPassword"){
		   //$enlaces == "usuarios" ||
		   //$enlaces == "galeria" ||
		   //$enlaces == "videos" ||
		   //$enlaces == "suscriptores" ||
		   //$enlaces == "mensajes" ||
		   //$enlaces == "perfil" ||
		   //$enlaces == "salir"){

			$module = "views/modules/".$enlaces.".php";
		}

		else if($enlaces == "index"){
			$module = "views/modules/login.php";
		}

		else{
			$module = "views/modules/login.php";
		}

		return $module;

	}


}