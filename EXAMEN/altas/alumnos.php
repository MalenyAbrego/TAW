<?php  
	require_once("db_utilities.php");
	
	if(isset($_POST['matricula']) && isset($_POST['carrera']) && isset($_POST['nombre']) && isset($_POST['tutor'])){
  addAlumno($_POST['matricula'],$_POST['carrera'],$_POST['nombre'],$_POST['tutor']);
  header("location: alumnos.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALUMNOS</title>
</head>
<body>
	<form method="POST" action="alumnos.php">
		<label for="matricula">Matrícula:</label><br>
		<input type="text" name="matricula"><br><br>
		<label for="carrera">Carrera:</label><br>
		<select name="carrera">
			<option value="1">ITI</option>
			<option value="2">IM</option>
		</select><br><br>
		<label for="nombre">Nombre:</label><br>
		<input type="text" name="nombre" ><br><br>
		<label for="nombre">Tutor:</label><br>
		<select name="tutor">
			<option value="1">Ing. ajhfda</option>
			<option value="2">Ing. ajdnka</option>
		</select><br><br>
		<input type="submit" name="Agregar" value="Agregar">
	</form>

</body>
</html>