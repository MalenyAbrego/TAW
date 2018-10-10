<?php  

class Paginas{
	//una funcion con el parametro $enlacesModel que se recibe a tráves del controlador

	public function enlacesPaginasModel($enlaces){
		//Validamos
		if($enlaces=="editar" || $enlaces=="ingresar" || $enlaces=="usuarios" || $enlaces=="salir"){
			//mostramos el URL concatenado con $enlacesModel
			$module="views/modules/".$enlaces.".php";
		}
		//Una vez "action" viene vacío (validando el contolador) entonces se consulta si la variable $enlacesModel es igual a la cadena "index" para de ser así, se muestre index.php
		else if($enlaces=="index"){
			$module="views/modules/registro.php";
		}
		else if($enlaces=="ok"){
			$module="views/modules/registro.php";
		}
		else if($enlaces=="fallo"){
			$module="views/modules/ingresar.php";
		}
		else if($enlaces=="cambio"){
			$module="views/modules/usuarios.php";
		}
		else{
			$module="views/modules/registro.php";
		}

		return $module;

	}
}


?>