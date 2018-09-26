<?php  
	require_once("db_utilities.php");
	
	if(isset($_POST['noEmpleado']) && isset($_POST['nombreTutor']) && isset($_POST['carrera'])){
  addTutores($_POST['noEmpleado'],$_POST['nombreTutor'],$_POST['carrera']);
  header("location: tutores.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TUTORES</title>
</head>
<body>
	<form method="POST" action="tutores.php">
		<label for="noEmpleado">No. Empleado:</label><br>
		<input type="text" name="noEmpleado"><br><br>
		<label for="nombreTutor">Nombre:</label><br>
		<input type="text" name="nombreTutor" ><br><br>
		<label for="carrera">Carrera:</label><br>
		<select name="carrera">
			<option value="1">ITI</option>
			<option value="2">IM</option>
		</select><br><br>
		<input type="submit" name="Agregar" value="Agregar">
	</form>

</body>
</html>