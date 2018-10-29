<?php

	class Paginas{

		public function enlacesPaginasModel($enlaces){
			if($enlaces =="inicio" || $enlaces=="login" || $enlaces=="inventario" || $enlaces=="salir" || $enlaces=="categorias" || 
         $enlaces=="usuarios" || $enlaces=="agregar_categoria" || $enlaces=="agregar_producto" || $enlaces=="agregar_usuario" || 
         $enlaces=="verTutorias"){

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