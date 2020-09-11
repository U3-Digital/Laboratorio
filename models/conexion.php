<?php

class Conexion{

	public static function conectar(){
	    //remoto
	 //    $servername = "mysql1007.mochahost.com";
		// $username = "rickurbi_oga";
		// $password = "Gbx=RK0%rI)]";
		// $dbname = "rickurbi_oga";


		// conexion local
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "lab";

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