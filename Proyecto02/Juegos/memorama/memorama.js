var tablero = new Array(4);
var tr = new Array(4);
var tapa = new Array(4);

var orden = new Array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);

var jugar = true;
var volteadas = 0;
var segundos = 0;

var tiempo = setInterval(function(){
	var valor;

	if(segundos < 10) valor = '00';
	else if(segundos < 100) valor = '0';
	else valor = '';

	document.getElementById('time').innerHTML = valor + segundos;//getSegundos();
	segundos++;

	//setSegundos(segundos+=1);
}, 1000);




var i,j,f,c;
for (i = orden.length; i; i--) {
    j = Math.floor(Math.random() * i);
    f = orden[i - 1];
    orden[i - 1] = orden[j];
    orden[j] = f;
}

var cont = 0;

for(var i = 0; i < 4; i++){
	tablero[i] = new Array(4);
	tapa[i] = new Array(4);

	tr[i] = document.createElement('tr');

	for(var j = 0; j < 4; j++){
		tablero[i][j] = orden[cont];
		var td = document.createElement('td');
		tapa[i][j] = document.createElement('img');
		tapa[i][j].setAttribute('src','imagenes/tapa.jpg');
		tapa[i][j].setAttribute('width','100');
		tapa[i][j].setAttribute('height','100');
		tapa[i][j].setAttribute('id','e'+orden[cont]);

		td.appendChild(tapa[i][j]);
		tr[i].appendChild(td);
		cont ++;

	}

	document.getElementById('tablero').appendChild(tr[i]);
}

var intervalo;
var tap, iguales = false;
var par = 0;
document.getElementById('num_pares').innerHTML = par + ' / 8';

function voltear(){
	//alert(tap);
	for(var i = 0; i < 4; i++){
		for(var j = 0; j < 4; j++){
			if(tapa[i][j].getAttribute('id')==tap && iguales == true){				
				tapa[i][j].setAttribute('src','');
				tapa[i][j].setAttribute('id','not');
			}
			else if(tapa[i][j].getAttribute('id')!='not')
				tapa[i][j].setAttribute('src','imagenes/tapa.jpg');	
		}
	}
	if(iguales == true) {par++;}//alert(pares);
	document.getElementById('num_pares').innerHTML = par + ' / 8';

	if(par == 8){
		alert('¡¡GANASTE¡¡')
		location.reload();
	} 
	
	volteadas = 0;
	jugar = true;
	iguales = false;
	clearInterval(intervalo);
}


var pares = new Array(2);
var ii=-1, jj=-1;

for(var i = 0; i < 4; i++){
	for(var j = 0; j < 4; j++){
		tapa[i][j].addEventListener('click', function(event){
			
			

			if(jugar == true){
				this.src = 'imagenes/'+ this.id + '.jpg';
				


				volteadas ++;


				if(volteadas < 2){
					ii = i;
					jj = j;
					tap = this.id;
					//alert(tap.getElementById('id'));
				}
				else{
					jugar = false;

					

					if(this.id == tap){
						//alert(this.id +','+tap);
						//this.src = '';
						iguales = true;
					}

					intervalo = setInterval(voltear, 1000);
									
				}
				

			} 
			//alert(this.id);
			
		});
		
	}
}










