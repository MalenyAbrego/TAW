var Nombre = document.opc.NombreJ.value;
var marquee = document.createElement("marquee");
var h1 = document.createElement("h1");
var div = document.getElementById("Complemento");
var tablero = document.getElementById("juego");
h1.innerHTML = Nombre;
div.appendChild(h1);
/*function Principal()
{//Inicia Funcion Principal	
	//Informacion del nombre del jugador y
	//del tamaño del tablero
	var Nombre = document.opc.NombreJ.value;
	var Filas = document.opc.Fila.value;
	var Columnas = document.opc.Columna.value;

	//Elemento que nos dira el nombre del jugador
	if(Filas != "" && Columnas != "" )
	{
		if(Filas%10 == 0 && Columnas%10 == 0)
		{
			if(Filas < 1000 && Columnas < 1000)
			{
				CrearTablero(Filas,Columnas);
				alert("Juego Terminado");
			}
			else
			{
				alert("Use Valores menores a 1000 !!!!");
			}
		}
		else
		{
			alert("Solo Multiplos de 10!!!");
		}
	}
	else
	{
		alert("Llene Los Campos de Filas y Columnas!!!");
		console.log("En Ejecucuion");
	}
}//Termina Funcion Principal*/
var px = 0;
var py = 0;
function BuscaMinas(e)
{
  var Elemento = e.target.id;
  if(Elemento == "div0")
  {
  	return 0;
  }
  else
  {
  	return 1;
  }
  return 1;
}
function CrearTablero(Filas,Columnas)
{
	var ids = 0;
	var tablero = getElementById("juego");
		for(var i=0;i<Filas;i++)
		{
				px = 0;
				for(var j=0;j < Columnas; j++)
				{
					var Elemento = document.createElement("div");
					Elemento.style.width = "40px";
					Elemento.style.height = "40px";
					Elemento.style.border = "1px solid white";
					Elemento.style.position = "absolute";
					Elemento.style.left = px+"px";
					Elemento.style.top = py+"px";
					Elemento.id = "div"+ids;
					Elemento.addEventListener('click',BuscaMinas,false);
					tablero.appendChild(Elemento);
					px += 20;
					ids++;
				}
				py += 20;
		}
}
var Filas = prompt("Filas: ");
var Columnas = prompt("Columnas: ");
CrearTablero(Filas,Columnas);