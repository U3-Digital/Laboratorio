<?php

class Conexion{

	public static function conectar(){
		// conexion local
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "sistema";

		//conexion Server
		// $servername = "mysql1007.mochahost.com";
		// $username = "rickurbi_belcam";
		// $password = "8gqMy;BQz@Om";
		// $dbname = "rickurbi_belcam";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		     //echo '<script>alert("Connected successfully");</script>';
		    }
		catch(PDOException $e)
		    {
		     //echo '<script>alert("Connection failed: '.$e->getMessage().'");</script>';

		    }
		return $conn;

	}

}