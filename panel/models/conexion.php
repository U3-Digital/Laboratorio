<?php

class Conexion{

	public static function conectar(){
	    //remoto
	    $servername = "mysql1007.mochahost.com";
		$dbname = "rickurbi_oga";
		$username = "rickurbi_oga";
		$password = "Op%lb2wH#~1p";


		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		     //echo '<script>alert("Connected successfully");</script>';
		}
		catch(PDOException $e) {
		     //echo '<script>alert("Connection failed: '.$e->getMessage().'");</script>';

		}
		return $conn;
	}
}