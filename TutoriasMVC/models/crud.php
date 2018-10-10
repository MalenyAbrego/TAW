<?php

#EXTENSION DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir ua clase padrre, y se utiliza dentro de una clase hija.
require_once "conexion.php";

//heredar la clase conexion de conexion.php para poder utilizar "Conexion" del archivo conexion.php

class Datos extends Conexion{

	#REGISTRO DE USUARIOS
	public function registroUsuarioModel($datosModel,$tabla){

		$stmt=Conexion::conectar()->prepare("INSERT INTO $tabla (matricula,nombre,carrera,situacionA,email,tutor) VALUES (:matricula,:nombre,:carrera,:situacionA,:email,:tutor)");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":matricula",$datosModel["matricula"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":carrera",$datosModel["carrera"], PDO::PARAM_STR);
		$stmt->bindParam(":situacionA",$datosModel["situacionA"], PDO::PARAM_STR);
		$stmt->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":tutor",$datosModel["tutor"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";

		}
		$stmt->close();
	}

	public function VerTablasModel($tabla){

  		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
  		$stmt->execute();
    		#fetchAll(): Obtiene todas las filas de un conjunto de resultados
        #asociado al objeto PDOStatement.
  		return $stmt->fetchAll();
  		$stmt->close();
  	}

	public function mostrarUsuariosModel(){
  		$stmt = Conexion::conectar()->prepare("SELECT a.matricula, a.nombre, c.nombre as carrera, a.situacionA,a.email,t.nombre as tutor FROM alumno as a INNER JOIN tutor as t on t.id = a.tutor INNER JOIN carrera as c on c.id = a.carrera");
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

	public function editarUsuarioModel($datosModel,$tabla){
		$stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();

	}

	public function actualizarUsuarioModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, password = :password, email = :email WHERE id = :id");
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){
			
			return "success";
		}
		else{
			return "error";
		}
		$stmt->close();
	}






}
?>