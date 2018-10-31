<?php
require_once("conexion.php");
Class Datos extends Conexion{
  
  #obtencion de datos para saber si se encuentra el usuario
	public function ingresoUsuarioModel($datosModel, $tabla){
		#consulta a la BD
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE username = :username AND password = :password");	
		#asignacion de los valores
		$stmt->bindParam(":username", $datosModel["username"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->execute();
		#se envian los resultados
		return $stmt->fetch();
		$stmt->close();
	}
  
  public function infoTablasModel($tabla){
  		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
  		$stmt->execute();
    		#fetchAll(): Obtiene todas las filas de un conjunto de resultados
        #asociado al objeto PDOStatement.
  		return $stmt->fetchAll();
  		$stmt->close();
  	}

  public function agregarEquipoModel($datosModel){
    $stmt=Conexion::conectar()->prepare("INSERT INTO Equipos (nombre,categoria) 
    VALUES (:nombre,:categoria)");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":categoria",$datosModel["categoria"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
    
  }
  
  public function agregarJugadorModel($datosModel){
    $stmt=Conexion::conectar()->prepare("INSERT INTO Jugador (nombre,email) VALUES (:nombre,:email)");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
  }
}