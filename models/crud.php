<?php

require_once "conexion.php";

class Datos extends Conexion{
		public static function mdlCliente($id,$tabla){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCliente = :id ");
			$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
		}

		public static function mdlMedico($id,$tabla){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idMedico = :id ");
			$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
			$stmt->close();
		}

		public static function mdlClientes($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();

		}


		public static function mdlBuscaCliente($tabla, $usuario){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCliente = :id");

		$stmt->bindParam(":id", $usuario, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetch();

		$stmt->close();
	}

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
	public static function ingresoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :usuario");

		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

	}

	public static function mdlRegistrarUsuario($datosModel, $tabla) {
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

	public static function mdlListaUsuarios($tabla) {
		$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$statement -> execute();

		return $statement -> fetchAll();

		$statement -> close();
	}

	public static function mdlBuscaUsuario($tabla, $idUsuario) {
		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE idUsuario = :idUsuario");

		$statement -> bindParam(":idUsuario", $idUsuario, PDO::PARAM_STR);

		$statement -> execute();

		return $statement -> fetch();

		$statement -> close();
	}

	public static function mdlActualizarUsuario($datosModel, $tabla) {

		if ($datosModel["password"]) {
			$statement = Conexion::conectar() -> prepare("UPDATE $tabla SET nombres = :nombres, apellidos = :apellidos, email = :email, password = :password, foto = :foto, rol = :rol, activo = :activo WHERE idUsuario = :idUsuario");

			$statement -> bindParam(":idUsuario", $datosModel["idUsuario"], PDO::PARAM_STR);
			$statement -> bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
			$statement -> bindParam(":apellidos", $datosModel["apellidos"], PDO::PARAM_STR);
			$statement -> bindParam(":email", $datosModel["correo"], PDO::PARAM_STR);
			$statement -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
			$statement -> bindParam(":foto", $datosModel["foto"], PDO::PARAM_STR);
			$statement -> bindParam(":rol", $datosModel["rol"], PDO::PARAM_INT);
			$statement -> bindParam(":activo", $datosModel["activo"], PDO::PARAM_STR);
		} else {
			$statement = Conexion::conectar() -> prepare("UPDATE $tabla SET nombres = :nombres, apellidos = :apellidos, email = :email, foto = :foto, rol = :rol, activo = :activo WHERE idUsuario = :idUsuario");

			$statement -> bindParam(":idUsuario", $datosModel["idUsuario"], PDO::PARAM_STR);
			$statement -> bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
			$statement -> bindParam(":apellidos", $datosModel["apellidos"], PDO::PARAM_STR);
			$statement -> bindParam(":email", $datosModel["correo"], PDO::PARAM_STR);
			$statement -> bindParam(":foto", $datosModel["foto"], PDO::PARAM_STR);
			$statement -> bindParam(":rol", $datosModel["rol"], PDO::PARAM_INT);
			$statement -> bindParam(":activo", $datosModel["activo"], PDO::PARAM_STR);
		}

		if ($statement -> execute()) {
			return "success";
		} else {
			return "error";
		}

		$statement -> close();
	}

	public static function mdlBorrarUsuario($idUsuario, $tabla) {

		$statement = Conexion::conectar() -> prepare("DELETE FROM $tabla WHERE idUsuario = :idUsuario");

		$statement -> bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);

		if ($statement -> execute()) {
			return "success";
		} else {
			return "error";
		}

	}


	public static function registrarMedicoModel($datosmodel,$tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`nombre`, `apellidos`, `email`) VALUES (:nombre, :apellidos, :email)");


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

	public static function mdlListaMedicos($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

	public static function mdlborrarMedico($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idMedico = :id");
		$stmt -> bindPARAM(":id",$datosModel, PDO::PARAM_INT);
		if ($stmt->execute()){
			return "success";
		} else {
			return "error";
		}
		$stmt -> close();
	}


	public static function registrarClienteModel($datosmodel,$tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`nombre`, `apellidos`, `email`) VALUES (:nombre, :apellidos, :email)");


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

	public static function mdlListaClientes($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

	public static function mdlRegistrarAnalisis($datosModel, $tabla) {

		$statement = Conexion::conectar() -> prepare("INSERT INTO $tabla VALUES (null, :nombre, :costo)");

		$statement -> bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$statement -> bindParam(":costo", $datosModel["costo"], PDO::PARAM_STR);

		if ($statement -> execute()) {
			return "success";
		} else {
			return "error";
		}
	}

	public static function mdlListaAnalisis($tabla) {
		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla");

		$statement -> execute();

		return $statement -> fetchAll();
	}

	public static function mdlBuscaAnalisis($idAnalisis, $tabla) {
		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE idAnalisis = :idAnalisis");

		$statement -> bindParam(":idAnalisis", $idAnalisis, PDO::PARAM_INT);

		$statement -> execute();

		return $statement -> fetch();

		$statement -> close();
	}

	public static function mdlActualizarAnalisis($datosModel, $tabla) {
		$statement = Conexion::conectar() -> prepare("UPDATE $tabla SET nombre = :nombre, costo = :costo WHERE idAnalisis = :idAnalisis");

		$statement -> bindParam(":idAnalisis", $datosModel["idAnalisis"], PDO::PARAM_INT);
		$statement -> bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$statement -> bindParam(":costo", $datosModel["costo"], PDO::PARAM_STR);

		if ($statement -> execute()) {
			return "success";
		} else {
			return "error";
		}
	}

	public static function mdlBorrarAnalisis($idAnalisis, $tabla) {
		$statement = Conexion::conectar() -> prepare("DELETE FROM $tabla WHERE idAnalisis = :idAnalisis");

		$statement -> bindParam(":idAnalisis", $idAnalisis, PDO::PARAM_INT);

		if ($statement -> execute()) {
			return "success";
		} else {
			return "error";
		}
	}

	public static function mdlEstudios($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();

	}

	public static function mdlBuscarEstudio($nombreAnalisis, $tabla) {

		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE nombre = :nombreAnalisis");

		$statement -> bindParam(":nombreAnalisis", $nombreAnalisis, PDO::PARAM_STR);

		$statement -> execute();

		return $statement -> fetch();

		$statement -> close();
	}

	public static function mldBuscarEstudios($tabla) {
		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla");

		$statement -> execute();

		return $statement -> fetchAll();

		$statement -> close();
	}

} // conexion