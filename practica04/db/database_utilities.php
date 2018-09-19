<?php
	include_once('database_credentials.php');

	//Funcion que permite agregar un nuevo usuario a la base de datos, requiere nombre y correo.
	function add($nombre,$correo){
		$db=getPDO();
		if(!isset($_POST["nombre"]) || !isset($_POST["correo"])) 
			exit();

		#Si todo va bien, se ejecuta esta parte del código...
		$nombre = $_POST["nombre"];
		$email = $_POST["correo"];

		$sentencia = $db->prepare("INSERT INTO datos(nombre, correo) VALUES (?, ?);");
		$resultado = $sentencia->execute([$nombre, $email]); # Pasar en el mismo orden de los ?

		#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
		#Con eso podemos evaluar

		if($resultado === TRUE) 
			echo "<b>Insertado correctamente</b>";
		else 
			echo "Algo salió mal. Por favor verifica que la tabla exista";
		
	}

	//Funcion que permite actualizar los atributos de un usuario existente, requiere nombre, correo y su id.
	function update($id,$nombre,$correo){
		$db=getPDO();
		
		#Si todo va bien, se ejecuta esta parte del código...
		//$id = $_POST["id"];
		//$nombre = $_POST["nombre"];
		//$email = $_POST["email"];

		$stmt=$db->prepare("UPDATE datos SET nombre=:nombre, correo=:correo WHERE id=:id");
		$stmt->bindParam(':nombre',$nombre);
		$stmt->bindParam(':correo',$correo);
		$stmt->bindParam(':id',$id);
		$stmt->execute();
	}

	//Funcion que permite eliminar un usuario de la base de datos utilizando su id.
	function delete($id){
		$db=getPDO();
		if(!isset($_GET["id"])) exit();
		$id = $_GET["id"];

		$sqlCmd="DELETE FROM datos WHERE id=:id"; //sql de la ejecución
		$stmt=$db->prepare($sqlCmd); //Obtenemos el Statement
		$stmt->bindParam(':id',$id);
		$stmt->execute(); //Ejecutamos la instrucción SQL

		if($stmt === TRUE) echo "Eliminado correctamente";
		else echo "Algo salió mal";
	}

	//Funcion que permite obtener todos los registros encontrados en la tabla usuarios de la base de datos.
	function get_all(){
		$db=getPDO();
		$sentencia = $db->prepare('SELECT * FROM datos');
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	//Funcion que permite realizar una busqueda de un usuario para obtener todos sus atributos mediante su id.
	function search($id){
		$db=getPDO();
		$sql = $db->prepare("SELECT * FROM datos where id=:id");
		$sql->bindParam(':id',$id);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
?>