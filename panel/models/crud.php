<?php

require_once "conexion.php";

class Datos extends Conexion{


  public static function borrar($nombre) {
    $statement = Conexion::conectar() -> prepare("DELETE FROM `catanalisis` WHERE nombre = :nombre LIMIT 2;");
    $statement -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

    if ($statement -> execute()) {
      return "success";
    } else {
      return "error";
    }
  }

		public static function mdlgrafica($tabla){
			$stmt = Conexion::conectar() -> prepare("SELECT SUM(costo) AS Total, MONTHNAME(fecha) as Mes FROM $tabla WHERE `fecha` > DATE_SUB(now(), INTERVAL 6 MONTH) GROUP BY MONTH(fecha) ORDER BY `fecha`;");
			$stmt -> execute();
			return $stmt -> fetchAll();
			
		} 

		public static function mdlListaEstudios($tabla){
			$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$statement -> execute();

			return $statement -> fetchAll();

			 
		}

		public static function mdlRegistraEstudio($estudios,$tabla){
			$stmt = Conexion::conectar ()->prepare("INSERT INTO $tabla( `cliente`, `email`, `medico`, `fecha`, `costo`, `responsable`, `resultados`) VALUES (:cliente, :email, :medico, :fecha, :costo, :responsable, :resultados)");
            $stmt -> bindParam(":cliente", $estudios["cliente"], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $estudios["email"], PDO::PARAM_STR);
			$stmt -> bindParam(":medico", $estudios["medico"],PDO::PARAM_STR);
			$stmt -> bindParam(":fecha", $estudios["fecha"], PDO::PARAM_STR);
			$stmt -> bindParam(":costo", $estudios["costo"], PDO::PARAM_INT);
			$stmt -> bindParam(":responsable", $estudios["responsable"], PDO::PARAM_STR);
			$stmt -> bindParam(":resultados", $estudios["resultados"],PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}else{
				return "error";
			}	
		}

		public static function mdlborrarEstudios($id,$tabla){
			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idEstudio = :id");
			$stmt -> bindPARAM(":id",$id, PDO::PARAM_INT);
			if ($stmt->execute()){
				return "success";
			} else {
				return "error";
			}
				
		}

		public static function mdlCliente($id,$tabla){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCliente = :id ");
			$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();
			 
		}

		public static function mdlMedico($id,$tabla){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idMedico = :id ");
			$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
			 
		}

		public static function mdlResumenDiario($dia,$tabla){
			$stmt = Conexion::conectar()->prepare("SELECT SUM(COSTO) AS 'Total',COUNT(*) AS 'citas' FROM `estudios` WHERE `fecha` = :dia");
			$stmt -> bindParam(":dia", $dia, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch();
			 
		}

		public static function mdlResumenMensual($datosmodel,$tabla){

			$stmt = Conexion::conectar()->prepare("SELECT SUM(COSTO) AS 'Total',COUNT(*) AS 'citas' FROM `estudios` WHERE `fecha` > :mes AND `fecha` <= :hoy");
			$stmt ->bindParam(":hoy", $datosmodel["hoy"], PDO::PARAM_STR);
			$stmt ->bindParam(":mes", $datosmodel["mes"], PDO::PARAM_STR);	
			$stmt->execute();	
			return $stmt-> fetch();
			 

		}

		public static function mdlClientes($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
			$stmt->execute();
			return $stmt->fetchAll();
			 

		}


		public static function mdlBuscaCliente($tabla, $usuario){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCliente = :id");

		$stmt->bindParam(":id", $usuario, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetch();

		 
	}

	public static function mdlborrarCliente($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idCliente = :id");
		$stmt -> bindPARAM(":id",$datosModel, PDO::PARAM_INT);
		if ($stmt->execute()){
			return "success";
		} else {
			return "error";
		}
		
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
		 
	}
	public static function mdlActualizaMedico($datosModel, $tabla){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellidos= :apellidos, email= :email WHERE idMedico = :id");

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
		 
	}

	#VERIFICA SI EL USUARIO EXISTE PARA INGRESAR AL SISTEMA
	#--------------------------------------------------------
	public static function ingresoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :usuario");

		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		

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

		 
	}

	public static function mdlListaUsuarios($tabla) {
		$statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$statement -> execute();

		return $statement -> fetchAll();

		 
	}

	public static function mdlBuscaUsuario($tabla, $idUsuario) {
		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE idUsuario = :idUsuario");

		$statement -> bindParam(":idUsuario", $idUsuario, PDO::PARAM_STR);

		$statement -> execute();

		return $statement -> fetch();

		 
	}

	public static function mdlActualizarUsuario($datosModel, $tabla) {

		if (array_key_exists("password", $datosModel)) {
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

		 
	}

	public static function mdlListaMedicos($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		 
	}

	public static function mdlborrarMedico($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idMedico = :id");
		$stmt -> bindPARAM(":id",$datosModel, PDO::PARAM_INT);
		if ($stmt->execute()){
			return "success";
		} else {
			return "error";
		}
		 
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

		 
	}

	public static function mdlListaClientes($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		 
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

		 
	}

	public static function mdlActualizarAnalisis($datosModel, $tabla) {
		$statement = Conexion::conectar() -> prepare("UPDATE $tabla SET costo = :costo WHERE idAnalisis = :idAnalisis");

		$statement -> bindParam(":idAnalisis", $datosModel["idAnalisis"], PDO::PARAM_INT);
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

		$stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla ORDER BY nombre ASC");
		$stmt->execute();
		return $stmt->fetchAll();
		 

	}

	public static function mdlEstudio($estudio, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idEstudio = :id");
        $stmt -> bindParam(":id", $estudio, PDO::PARAM_INT);
        $stmt -> execute();
		return $stmt->fetch();
		 
	}

	public static function mdlBuscarEstudio($nombreAnalisis, $tabla) {

		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE nombre = :nombreAnalisis");

		$statement -> bindParam(":nombreAnalisis", $nombreAnalisis, PDO::PARAM_STR);

		$statement -> execute();

		return $statement -> fetch();

		 
	}

	public static function mldBuscarEstudios($tabla) {
		$statement = Conexion::conectar() -> prepare("SELECT * FROM $tabla");

		$statement -> execute();

		return $statement -> fetchAll();

		 
    }
    
    public static function mdlActualizarEstudio($datosModel, $tabla) {

        $statement = Conexion::conectar() -> prepare("UPDATE $tabla SET cliente = :cliente, email = :emailCliente, medico = :medico, costo = :costo, resultados = :resultado WHERE idEstudio = :idEstudio");
        
        $statement -> bindParam(":cliente", $datosModel["cliente"], PDO::PARAM_STR);
        $statement -> bindParam(":emailCliente", $datosModel["emailCliente"], PDO::PARAM_STR);
        $statement -> bindParam(":medico", $datosModel["medico"], PDO::PARAM_STR);
        $statement -> bindParam(":costo", $datosModel["costo"], PDO::PARAM_INT);
        $statement -> bindParam(":resultado", $datosModel["resultado"], PDO::PARAM_STR);
        $statement -> bindParam(":idEstudio", $datosModel["idEstudio"], PDO::PARAM_INT);

        if ($statement -> execute()) {
            return "success";
        } else {
            return "error";
        }

    }

} // conexion