<?php

class Conexion{

	public function conectar(){
		date_default_timezone_set('America/Mexico_City');
		$link=new PDO("mysql:host=localhost;dbname=tutorias","root","ad52f770c3619d976884482e46e7de9267bd708a553d8d20");
		return $link;
	}
}




?>