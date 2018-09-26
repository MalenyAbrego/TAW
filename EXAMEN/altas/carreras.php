<?php  
	require_once("db_utilities.php");
	
	if(isset($_POST['nombreCarrera'])){
  addCarreras($_POST['nombreCarrera']);
  header("location: carreras.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CARRERAS</title>
</head>
<body>
	<form method="POST" action="carreras.php">
		
		<label for="nombreCarrera">Nombre:</label><br>
		<input type="text" name="nombreCarrera" ><br><br>
		
		<input type="submit" name="Agregar" value="Agregar">
	</form>

</body>
</html>