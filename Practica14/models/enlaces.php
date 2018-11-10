<?php

	class Paginas{

		public function enlacesPaginasModel($enlaces){
			if($enlaces =="inicio" || $enlaces=="login" || $enlaces=="agregar_promociones" || $enlaces=="agregar_usuarios" || $enlaces=="ver_promociones" || $enlaces=="ver_usuarios" || $enlaces=="inicio2"){

				$modules="views/modules/".$enlaces.".php";
			}
			else if($enlaces=="index"){
				$modules="views/modules/login.php";
			}
			else{
				$modules="views/modules/login.php";
			}
			return $modules;	
		}
	}

?>