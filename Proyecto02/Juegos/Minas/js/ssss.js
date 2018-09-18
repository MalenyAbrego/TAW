function Principal()
{	
	//Informacion del nombre del jugador y
	//del tamaño del tablero
	var Nombre = document.opc.NombreJ.value;
	var Filas = document.opc.Fila.value;
	var Columnas = document.opc.Columna.value;

	//Elemento que nos dira el nombre del jugador
	var marquee = document.createElement("marquee");
	var h1 = document.createElement("h1");
	var div = document.getElementById("Complemento");
	var tablero = document.getElementById("juego");
	h1.innerHTML = Nombre;
	div.appendChild(h1);
	var px = 0;
	var py = 0;
	//Creamos una matriz
	var Elementos = new Array(Filas);
	for (i = 0; i < Columnas; i++)
	{
		Elementos[i] = new Array(Columnas);
	}


	function CrearTablero()
	{
		function click()
		{
			alert("Click!!!");
		}
		for(var i=0;i<Filas;i++)
		{
				px = 0;
				for(var j=0;j < Columnas; j++)
				{
					Elementos[i][j] = document.createElement("div");
					Elementos[i][j].style.width = "20px";
					Elementos[i][j].style.height = "20px";
					Elementos[i][j].style.border = "1px solid white";
					Elementos[i][j].style.position = "absolute";
					Elementos[i][j].style.left = px+"px";
					Elementos[i][j].style.top = py+"px";
					Elementos[i][j].addEventListener("click",click,false);
					tablero.appendChild(Elementos[i][j]);
					px += 20;
				}
				py += 20;
		}

		
}

	//Validamos que no esten vacios los campos
	if(Filas != "" && Columnas != "")
	{
		//Validamos que sean multiplos de 10
		if(Filas%10 == 0 && Columnas%10 == 0)
		{
			//Generamos el tablero
		CrearTablero();		
		}
		else
		{
			alert("Los valores de filas y columnas deben \n ser multiplos de 10");
		}
	}
	else
	{
		alert("Llena los campos de fila y columna !!!");
	}
}