<?php  
	
	/*Desarrollar un script en php o JavaScript básico en donde utilizando un array asociativo se guarde:
		Persona 1: Nombre.
		Persona 1: Nombre y Apellido.
		Persona 2: Nombre y Apellido DE LA PERSONA 1.*/


	$persona1 = array('Nombre' =>"Maleny" ,'Apellido'=> "Abrego"); //Array de PERSONA 1
    $persona2 = array('Nombre' =>"Marcela" ,'Apellido'=> $persona1['Apellido']); //Array de PERSONA 2 con los datos de persona 1
    echo $persona1['Nombre']."<br>";



?>
