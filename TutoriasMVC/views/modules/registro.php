<h1>REGISTRO DE USUARIOS</h1>

<form method="POST">
	<input type="number" name="matriculaRegistro" placeholder="Matricula" required>
	<input type="text" name="usuarioRegistro" placeholder="Nombre" required><br>
	<label for="carrera">Carrera</label><br>
	<select name="carreraRegistro" required>
		 <?php
		 echo "<script>alert('Usuario/Contraseña invalidos');</script>";
            $carrer = new MvcController();
            $carrer -> selCarrera();
          ?>
	</select>
	<input type="text" name="situacionARegistro" placeholder="Situación academica" required>
	<input type="email" name="emailRegistro" placeholder="E-mail" required>
	<label for="tutorRegistro">Tutor</label><br>
	<select name="tutorRegistro" required>
		<?php
            $carrer = new MvcController();
            $carrer -> selTutor();
          ?>
	</select>
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
