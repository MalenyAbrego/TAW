<?php
	session_start();
	if(!$_SESSION["validar"]){
		header("location:index.php?action=ingresar");
		exit();
	}

	//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
	$editar= new MvcController();
?>


<h1>EDITAR USUARIO</h1>
<?php
	//Se invoca la funcion editarUsuarioController de la clase MvcController:
	$editar->editarUsuarioController();
	
?>