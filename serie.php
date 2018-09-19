<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Práctica #3</title>
</head>
<body>
	<?php  

	/*Clase que representa un objeto donde se encuentran dos arrays númericos de dimensión 25, en los cuales uno tiene valores almacenados y el otro genera la serie Fibonacci*/

	class array_num{

		public $array; //Original
		public $arrayFibonacci; // Con serie

		//Constructor que inicializa los arreglos
		function __construct(){
			$this->array=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25);
			$this->arrayFibonacci=[];
			for($i=0; $i<25; $i++){
				$this->arrayFibonacci[$i]=0;
			}
		}

		//Funcion que permite generar la serie Fibonacci dependiendo de los valores del primer array
		function hacer_fibonacci(){
			$this->arrayFibonacci=[];
			$this->arrayFibonacci[0]=$this->array[0];
			$this->arrayFibonacci[1]=$this->array[1];
			for($i=2;$i<25;$i++){
				$this->arrayFibonacci[$i]=$this->arrayFibonacci[$i-1]+$this->arrayFibonacci[$i-2];
			}
		}

		//Funcion que permite imprimir los dos arreglos
		function imprimir(){
			echo ("<br><strong>Array sin modificar</strong><br>");
			for($i=1; $i<25; $i++){
				if($i<24)
					echo($this->array[$i].", ");
				else
					echo($this->array[$i].".<br><br>");
			}

			echo ("<br><Strong>Array con serie Fibonacci</strong><br>");
			for($i=1; $i<25; $i++){
				if($i<24)
					echo($this->arrayFibonacci[$i].", ");
				else
					echo($this->arrayFibonacci[$i].".<br><br>");
			}

		}

	}

//Nuevo objeto tipo array_num representa los dos arreglos:
	$a=new array_num();

//Generar la serie fibonacci
	$a->hacer_fibonacci();

//imprimir arreglos
	$a->imprimir();

?>

</body>
</html>