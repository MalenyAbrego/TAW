var nombre;
var Filas;
var Columnas;
var div = document.getElementById("juego");
function Iniciar()
{
	nombre = document.opc.NombreJ.value;
	Filas = document.opc.Fila.value;
	Columnas = document.opc.Columna.value;
	if(Filas != "" && Columnas != "")
	{
		if(Filas%10 == 0 && Columnas%10 == 0)
		{
			DibujarTablero();
		}
		else
		{
			alert("Deben ser multiplos de 10");
		}
	}
	else
	{
		alert("Dejo vacio los campos Filas ó Columnas");
	}
}


function DibujarTablero()
{
	var px = 0;
	var py = 0;
	var cont = 0;
	for(var i = 0; i<Filas;i++)
	{
		px = 0;
		for(var j = 0; j<Columnas;j++)
		{
			var Casilla = document.createElement("div");
			Casilla.id = "div"+cont;
			Casilla.style.border = "1px solid white";
			Casilla.style.width = "30px";
			Casilla.style.height = "30px";
			Casilla.style.position = "absolute";
			Casilla.style.left = px+"px";
			Casilla.style.top = py+"px";
			div.appendChild(Casilla);
			px += 30;
			cont++;
		}
		py += 30;
	}
}