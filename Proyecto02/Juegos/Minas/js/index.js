//Declaramos el tipo Bomba
function Bomba()
{
	this.pos;
	this.adyacentes = [];
}
var Bombas = new Bomba;
var cantBomb = Math.floor(279/3);
var B = new Array(cantBomb);
var nombre;
var Filas = 17;
var Columnas = 30;
var cont = 0;
var Tabla = document.getElementById("Casilla");

for(var i = 0; i<Filas;i++)
{
	var rows = document.createElement("tr");
	for(var j = 0; j<Columnas;j++)
	{
		var cols = document.createElement("td");
		cols.id = cont;
		cols.style.width = "20px";
		cols.style.height = "20px";
		cols.style.border = "1px solid white";
		cols.style.backgroundColor = "#0075FD";
		cols.addEventListener('click',EmpiezaJuego,false);
		rows.appendChild(cols);			
		cont++;
		}
		Tabla.appendChild(rows);
}
alert("Tablero Hecho");
ColocarBombas();
function EmpiezaJuego(e)
{
	for(var i = 0; i < cantBomb; i++)
	{
		if(e.target.id == B[i].pos)
		{
			e.target.style.backgroundColor = "#FF0000";
			alert("Perdiste!!!!");
			Tabla.style.display = "none";
		}
		else
		{
			e.target.style.backgroundColor = "#00FF00";
		}
	}
}
function ColocarBombas()
{
	for(var i = 0; i < cantBomb; i++)
	{
		var rand = Math.floor(Math.random()*279);
		var Bombas = new Bomba();
		Bombas.pos = rand;
		B[i] = Bombas;
	}
	for(var i = 0; i < 67; i++)
	{
			if(B[i].pos == B[j+1].pos)
			{
				var pos = Math.floor(Math.random()*279);
				B[i].pos = pos;
			}
	}
	
	
	
}
