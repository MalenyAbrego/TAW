<?php  

class EnlacesPaginas{
	//una funcion con el parametro $enlacesModel que se recibe a tráves del controlador

	public function enlacesPaginasModel($enlacesModel){
		//Validamos
		if($enlacesModel=="nosotros" || $enlacesModel=="servicios" || $enlacesModel=="contacto"){
			//mostramos el URL concatenado con $enlacesModel
			$module="views/modules/".$enlacesModel.".php";
		}
		//Una vez "action" viene vacío (validando el contolador) entonces se consulta si la variable $enlacesModel es igual a la cadena "index" para de ser así, se muestre index.php
		else if($enlacesModel=="index.php"){
			$module="views/modules/inicio.php";
		}

		//Validar una LISTA BLANCA (la cual es una lista que tiene unicamente con los URL que estamos usando)
		else{
			$module="views/modules/inicio.php";
		}

		return $module;

	}
}


?>