<?php
class Enlaces{
	public static function enlacesController(){
		if(isset($_GET["action"])){
			$enlaces = $_GET["action"];
		}
		else{
			$enlaces = "index";
		}
		$respuesta = EnlacesModels::enlacesModel($enlaces);

		include $respuesta;
		//echo $respuesta;
		//echo '<script>alert("'.$respuesta.'");</script>';
	}
}