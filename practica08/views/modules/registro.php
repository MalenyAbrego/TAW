<h1>REGISTRO DE USUARIOS</h1>

<form method="POST">
	<input type="text" name="usuarioRegistro" placeholder="Nombre" required>
	<input type="password" name="passwordRegistro" placeholder="Contraseña" required>
	<input type="email" name="emailRegistro" placeholder="E-mail" required>
	<input type="submit" value="Enviar">
</form>

<?php
	//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
	$registro= new MvcController();

	//Se invoca la funcion registroUsuarioController de la clase MvcController:
	$registro->registroUsuarioController();

	if(isset($_GET["action"])){
		if($_GET["action"]=="ok"){
			echo "¡Registro exitoso!";
		}

	}


?>
