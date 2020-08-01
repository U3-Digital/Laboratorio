<?php

require_once "conexion.php";

class Datos extends Conexion{

	public static function mdlborrarCliente($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idCliente = :id");
		$stmt -> bindPARAM(":id",$datosModel, PDO::PARAM_INT);
		if ($stmt->execute()){
			return "success";
		} else {
			return "error";
		}
		$stmt -> close();
	}
		public static function mdlActualizaCliente($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellidos= :apellidos, email= :email WHERE idCliente = :id");

		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datosModel["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "success";
		}

		else{
			return "error";
		}
		$stmt->close();
	}

	#VERIFICA SI EL USUARIO EXISTE PARA INGRESAR AL SISTEMA
	#--------------------------------------------------------
	public function ingresoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :usuario");

		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

	}

	public function mdlRegistrarUsuario($datosModel, $tabla) {
		$statement = Conexion::conectar()->prepare("INSERT INTO $tabla VALUES (null, :nombres, :apellidos, :email, :password, :foto, :rol, :activo);");

		$statement -> bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
		$statement -> bindParam(":apellidos", $datosModel["apellidos"], PDO::PARAM_STR);
		$statement -> bindParam(":email", $datosModel["correo"], PDO::PARAM_STR);
		$statement -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$statement -> bindParam(":foto", $datosModel["foto"], PDO::PARAM_STR);
		$statement -> bindParam(":rol", $datosModel["rol"], PDO::PARAM_STR);
		$statement -> bindParam(":activo", $datosModel["activo"], PDO::PARAM_STR);

		if ($statement -> execute()) {
			return "success";
		} else {
			return "error";
		}

		// return $statement -> fetch();

		$statement -> close();
	}


	public function registrarClienteModel($datosmodel,$tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO clientes (`nombre`, `apellidos`, `email`) VALUES (:nombre, :apellidos, :email)");
		

		$stmt -> bindParam(":nombre", $datosmodel["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellidos", $datosmodel["apellidos"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datosmodel["email"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}

		$stmt->close();
	}
	public function mdlListaClientes($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

} // conexion