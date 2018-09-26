<?php
	
	require_once("conexion.php");


	function addAlumno($matricula,$carrera,$nombre,$tutor){
		global $pdo;
		$stmt = $pdo->prepare("INSERT INTO alumnos(matricula,carrera,nombre,tutor)
					VALUES('$matricula', '$carrera', '$nombre', '$tutor')");
		return $stmt->execute();
	}

	function addTutores($noEmpleado,$nombre,$carrera){
		global $pdo;
		$stmt = $pdo->prepare("INSERT INTO tutores(noEmpleado,nombre,carreraID)
					VALUES('$noEmpleado', '$nombre', '$carrera')");
		return $stmt->execute();
	}

	function addCarreras($nombre){
		global $pdo;
		$stmt = $pdo->prepare("INSERT INTO carrera(nombre)
					VALUES('$nombre')");
		return $stmt->execute();
	}


?>