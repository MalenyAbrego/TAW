<?php
require_once("conexion.php");
Class Datos extends Conexion{
  
  #obtencion de datos para saber si se encuentra el usuario
	public function ingresoUsuarioModel($datosModel){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE usuario=:usuario AND password=:password");
			$stmt->bindParam(":usuario",$datosModel['usuario'],PDO::PARAM_STR);
			$stmt->bindParam(":password",$datosModel['password'],PDO::PARAM_STR);

			$stmt->execute();
			$r = $stmt->fetchAll();
			if($r){
				return 1;
			}else{
				return 0;
			}
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
    $stmt=Conexion::conectar()->prepare("INSERT INTO Equipos (equipo,categoria) 
    VALUES (:equipo,:categoria)");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":equipo",$datosModel["equipo"], PDO::PARAM_STR);
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
    //echo "<script>alert('4');</script>";
		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){
      //echo "<script>alert('5');</script>";
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
  }
  
  public function agregarCategoriaModel($datosModel){
    $stmt=Conexion::conectar()->prepare("INSERT INTO categorias (nombre) VALUES (:nombre)");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
  }
  
  public function agregarAsignacionModel($datosModel){
    $stmt=Conexion::conectar()->prepare("INSERT INTO jugador_equipo (jugador,equipo) VALUES (:jugador,:equipo)");
  
		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":jugador",$datosModel["jugador"], PDO::PARAM_INT);
    $stmt->bindParam(":equipo",$datosModel["equipo"], PDO::PARAM_INT);

		if($stmt->execute()){
 
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
  }
  
  public function mostrarAsignacionesModel(){
  		$stmt = Conexion::conectar()->prepare("SELECT J.nombre, E.equipo
                                              FROM Jugador J INNER JOIN jugador_equipo JE ON J.id = JE.jugador
                                              INNER JOIN Equipos E ON JE.equipo = E.id");
  		$stmt->execute();
    		#fetchAll(): Obtiene todas las filas de un conjunto de resultados
        #asociado al objeto PDOStatement.
  		return $stmt->fetchAll();
  		$stmt->close();
  	}
  
  public function mostrarEquiposModel(){
  		$stmt = Conexion::conectar()->prepare("SELECT E.id, E.equipo, C.nombre
                                            FROM categorias C INNER JOIN Equipos E ON C.id = E.categoria");
  		$stmt->execute();
    		#fetchAll(): Obtiene todas las filas de un conjunto de resultados
        #asociado al objeto PDOStatement.
  		return $stmt->fetchAll();
  		$stmt->close();
  	}
  
  public function borrarUsuariosModel($tabla,$datosModel){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_STR);
		$stmt->execute();
		
		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

 
  
}