<?php
	include_once('connection.php');

	//Funcion que permite agregar un nuevo usuario a la base de datos.
	function add($id,$nombre,$posicion,$carrera,$email,$id_type){
		global $pdo;
		$stmt = $pdo->prepare("INSERT INTO sport_team(id,nombre,posicion,carrera,email,id_type)
					VALUES('$id', '$nombre', '$posicion', '$carrera', '$email', '$id_type')");
		return $stmt->execute();
	}

	//Funcion que permite actualizar los atributos de un usuario existente.
	function update($id,$nombre,$posicion,$carrera,$email,$id_type){
		global $pdo;

		$stmt=$pdo->prepare("UPDATE sport_team SET nombre=:nombre, posicion=:posicion, carrera=:carrera, email=:email where id=:id and id_type=:id_type");
		$stmt->bindParam(':nombre',$nombre);
		$stmt->bindParam(':posicion',$posicion);
		$stmt->bindParam(':carrera',$carrera);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':id_type',$id_type);
		$stmt->execute();

	}

	//Función de búsqueda del id del usuario
	function search($id){
		global $pdo;

		$sql = $pdo->prepare("SELECT * FROM sport_team where id=:id");
		$sql->bindParam(':id',$id);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}

	//Funcion que permite eliminar un usuario de la base de datos utilizando su id.
	function delete($id){
		global $pdo;
		$stmt = $pdo->prepare("DELETE FROM sport_team WHERE id = '$id'");
		return $stmt->execute();

	}


	//Función de contador total de usuarios
	function count_users(){
		global $pdo;

		$sql="SELECT COUNT(*) AS total_users FROM user";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$usuarios=$res[0]['total_users'];

		return $usuarios;

	}

	//Función de impresión dinámica de las tablas de la base de datos
	function selectAllFromTable($t){
		global $pdo;
		$sentencia = $pdo->prepare('SELECT * FROM '.$t);
		$sentencia->execute();
		return $sentencia->fetchAll();
	}
	
	//Función de contador total de Tipos de usuarios 
	function count_types(){
		global $pdo;

		$sql="SELECT COUNT(*) AS total_type FROM user_type";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$tipos=$res[0]['total_type'];

		return $tipos;
	}

	//Función de contador total de estados 
	function count_status(){
		global $pdo;

		$sql="SELECT COUNT(*) AS total_status FROM status";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$status=$res[0]['total_status'];

		return $status;
	}

	//Función de contador total de accesos al sistema registrados en la base de datos 
	function count_access(){
		global $pdo;

		$sql="SELECT COUNT(*) AS total_access FROM user_log";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$acceso=$res[0]['total_access'];

		return $acceso;
	}

	//Función de contador total de usuarios activos
	function count_active(){
		global $pdo;

		$sql="SELECT COUNT(*) AS total_active FROM user WHERE status_id=1";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$activos=$res[0]['total_active'];

		return $activos;
	}

	//Función de contador total de usuarios inactivos
	function count_inactive(){
		global $pdo;

		$sql="SELECT COUNT(*) AS total_inactive FROM user WHERE status_id=2";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$inactivos=$res[0]['total_inactive'];

		return $inactivos;

	}

	//Función para obtener la tabla de sport_team
	function getAll(){
		global $pdo;

		$sentencia = $pdo->prepare('SELECT * FROM sport_team');
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

?>