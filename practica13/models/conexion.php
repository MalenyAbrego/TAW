<?php

class Conexion{

	public function conectar(){
		date_default_timezone_set('America/Mexico_City');
		//$link=new PDO("mysql:host=localhost;dbname=tutoriasMVC","admin","MARIOTUTORIAS");
		$link=new PDO("mysql:host=localhost;dbname=controlJugadores","admin","MARIOTAW");
		return $link;
	}
}

?>