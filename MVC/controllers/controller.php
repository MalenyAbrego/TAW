<?php  

	class MvcController{
		//Llamar a la plantilla
		public function plantilla(){
			//include se utiliza para invocar el archivo que contiene el codigo HTML
			include "views/template.php";
		}

		//interacción con el usuario
		public function enlacesPaginasController(){
			//Trabajas con los enlaces de las páginas
			//Validamos si la variable "action" viene vacía, es decir, cuando se abre la página por primera vez se debe cargar la vista index.php

			if(isset($_GET["action"])){
				//guardar el valor de la variable action en "views/modules/navegacion.php" en el cual se recibe mediante el método GET esa variable
				$enlacesController = $_GET["action"];
			}
			else{
				//Si viene vacío, inicializo con index
				$enlacesController="index";
			}
			//Mostrar los archivos de los enlaces de cada una de las secciones: Inicio, nosotros, etc.
			//PARA ESTO HAY QUE MANDAR AL MODELO PARA QUE HAGA DICHO PROCESO Y MUESTRE LA INFORMACIÓN
			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
			include $respuesta;

		}
	}

?>