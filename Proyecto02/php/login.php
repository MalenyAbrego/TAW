<?php
include 'conexion.php';

session_start();
session_unset();
session_destroy();

$user=filter_input(INPUT_POST,'username');
$pass=filter_input(INPUT_POST,'password');

$db=getConnection();
$stmt=$db->query("SELECT username, password FROM usuario WHERE username=:username");
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt->bindParam(':username',$user);

if($user == $result['username'] && sha1($pass) == $result['password']){
	session_start();
	
	$_SESSION['user']=$result['username'];
	header('Location: ../home.php');
	/*exit();*/
}

else{
	header('Location: ../index.php');
}
 ?>
