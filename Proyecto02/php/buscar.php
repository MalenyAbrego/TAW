<?php
include 'conexion.php';

$user=filter_input(INPUT_POST,'search');

$db=getConnection();
$stmt=$db->query("SELECT * FROM usuario WHERE username='$user'");
$result = $stmt->fetch();

if ($result > 0) {
	session_start();
	$_SESSION['buscar']=$user;
	header('Location: ../busqueda.php');
}else{
	header('Location: ../error.php');
}
 ?>
