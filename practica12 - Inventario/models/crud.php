<?php

#EXTENSION DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir ua clase padrre, y se utiliza dentro de una clase hija.
require_once "conexion.php";

//heredar la clase conexion de conexion.php para poder utilizar "Conexion" del archivo conexion.php

class Datos extends Conexion{

	#REGISTRO DE USUARIOS
	public function agregarProductoModel($datosModel){

		$stmt=Conexion::conectar()->prepare("INSERT INTO productos (codigo,nombre,fecha_agregado,precio, stock, categoria) 
    VALUES (:codigo,:nombre,:fecha_agregado,:precio, :stock, :categoria)");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":codigo",$datosModel["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_agregado",$datosModel["fecha_agregado"], PDO::PARAM_STR);
    $stmt->bindParam(":precio",$datosModel["precio"], PDO::PARAM_STR);
    $stmt->bindParam(":stock",$datosModel["stock"], PDO::PARAM_STR);
    $stmt->bindParam(":categoria",$datosModel["categoria"], PDO::PARAM_STR);
    //$stmt->bindParam(":ruta_img",$datosModel["ruta_img"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";

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

  
  public function agregarCategoriaModel($datosModel){
    $stmt=Conexion::conectar()->prepare("INSERT INTO categorias (nombre,descripcion) 
    VALUES (:nombre,:descripcion");

		#bindParam() Vincula una variable de PHP a un parámetro de susticion de nombre de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia
		$stmt->bindParam(":nombre",$datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion",$datosModel["descripcion"], PDO::PARAM_STR);
		//$stmt->bindParam(":fecha_agregado",$datosModel["fecha_agregado"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";

		}
		$stmt->close();
    
  }
  
  public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT nombre_usuario, password FROM $tabla WHERE nombre_usuario = :nombre_usuario");	
		$stmt->bindParam(":nombre_usuario", $datosModel["nombre_usuario"], PDO::PARAM_STR);
		$stmt->execute();

		#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

	}
}
