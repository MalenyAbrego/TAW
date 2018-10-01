<?php  

class EnlacesPaginas{
	//una funcion con el parametro $enlacesModel que se recibe a tráves del controlador

	public function enlacesPaginasModel($enlacesModel){
		//Validamos
		if($enlacesModel=="nosotros" || $enlacesModel=="servicios" || $enlacesModel=="contacto"){
			//mostramos el URL concatenado con $enlacesModel
			$module="views/modules/".$enlacesModel.".php";
		}

		//Una vez "action" viene vacío (validando en el controlador) entonces se consulta si la variable $enlacesModel es igua a la cadena "index" para de ser asi se muestre index.php
		else if($enlacesModel=="index"){
			$module="views/modules/inicio.php";
		}

		//Validar una LISTA BLANCA
		else{
			$module="views/modules/inicio.php";
		}
		return $module;
	}
}


?>