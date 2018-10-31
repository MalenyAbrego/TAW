<?php

class Conexion{

	public function conectar(){
		//date_default_timezone_set('America/Mexico_City');
		$link=new PDO("mysql:host=localhost;dbname=mvc","admin","c0eaba661c197c3136d519ec9c433ebfcce9a44ffdc98426");
		//$link=new PDO("mysql:host=localhost;dbname=mvc","root","");
		return $link;
	}
}




?>