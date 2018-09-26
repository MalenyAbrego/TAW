<?php
	

	$d = 'mysql:dbname=altasexamen;host=localhost;';
	$user = 'root';
	$password = '';

	try{
		$pdo = new PDO($d, $user, $password);
	}catch( PDOException $e ){
		echo 'Error al conectarnos: ' . $e->getMessage();
	}


?>