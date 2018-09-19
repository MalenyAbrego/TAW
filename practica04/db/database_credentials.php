<?php
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');

	function getPDO(){
		$host="localhost";
		$dbname="basededatos";
		$dbOtp=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");
		$pdoObj=new PDO("mysql:host={$host};dbname={$dbname}",DB_USER,DB_PASSWORD);
		return $pdoObj;
	}

?>