<?php

class Conexion{

	public function conectar(){
		$link=new PDO("mysql:host=localhost;dbname=tutorias","root","");
		return $link;
	}
}




?>