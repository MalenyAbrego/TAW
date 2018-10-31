<?php

	class Paginas{

		public function enlacesPaginasModel($enlaces){
			if($enlaces =="inicio" || $enlaces=="login" || $enlaces=="agregarJugador" || $enlaces=="verJugadores" || $enlaces=="verEquipos" || 
         $enlaces == "agregarEquipos"){

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