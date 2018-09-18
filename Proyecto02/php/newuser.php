<?php
include 'conexion.php';

$nombre=filter_input(INPUT_POST, 'nombre');
$apellidos=filter_input(INPUT_POST, 'apellidos');
$fechaNac=filter_input(INPUT_POST, 'fechNac');
$sexo=filter_input(INPUT_POST, 'sexo');
$correo=filter_input(INPUT_POST, 'correo');
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'pass');
$passworddos=filter_input(INPUT_POST, 'passdos');
$terminos=filter_input(INPUT_POST, 'terminos');

$db=getConnection();

$stmt=$db->prepare('INSERT INTO usuario (username, nombre, apellidos, password, fecha_nacimiento, sexo, correo)' .
                  'value (:username, :nombre, :apellidos, sha1(:password), :fecha_nacimiento, :sexo, :correo)');

$stmt->bindParam(':nombre',$nombre);
$stmt->bindParam(':apellidos',$apellidos);
$stmt->bindParam(':fecha_nacimiento',$fechaNac);
$stmt->bindParam(':sexo',$sexo);
$stmt->bindParam(':correo',$correo);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->execute();


header('Location: ../index.php');

# NO concatenar la instrucion concatenar
#ejemplo $sql="insert into tabla values" ('".$val1."','".$otroVal."')";

?>
