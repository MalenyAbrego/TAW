<h1>INGRESAR</h1>

<form method="POST">
	<input type="text" name="usuarioIngreso" placeholder="Usuario" required>
	<input type="password" name="passwordIngreso" placeholder="Contraseña" required>
	<input type="submit" value="Ingresar">
</form>

<?php
	
	//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
	$ingresar= new MvcController();
	
	//Se invoca la funcion ingresarUsuarioController de la clase MvcController:
	$ingresar->ingresarUsuarioController();

		if(isset($_GET['action'])){
			if($_GET['action']=='fallo'){
				//se indica mediante una alerta que el usuario o la contraseña es invalida
				echo "<script>alert('Usuario o contraseña incorrecta.')</script>";

		}
	}



?>