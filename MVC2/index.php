<?php
// El index que muestra al usuario la salida de las vistas y a través de él enviaremos las distintas acciones del usuario al CONTROLADOR

	//Mostrar la plantilla USUARIOS (template.php) la cual se alojará en VIEWS
	require_once "controllers/controller.php";

	//Invocamos el modelo que se utilizará en todos los archivos
	require_once "models/enlaces.php";
	require_once "models/crud.php";

//Para poder ver el template/plantilla, se hace una petición mediante a un controlador

	//Creamos el objeto:
	$mvc = new MvcController();

	//Muestra la función "plantilla" que se encuentra en controllers/controller
	$mvc -> pagina();
?>