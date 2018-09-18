var con=1;
var b1="b1",b2="b2",b3="b3",b4="b4",b5="b5",b6="b6",b7="b7",b8="b8",b9="b9";
var w1;
var w2;
var l1;
var l2;
var d0;
var p1=document.getElementById("txtPlayer1").value;
var p2=document.getElementById("txtPlayer2").value;
var jugador;
var empate=0;

function actions(boton){
 if(boton.className=="btnGame"){
	 w1=parseInt(document.getElementById("wl1").innerHTML);
w2=parseInt(document.getElementById("wl2").innerHTML);
l1=parseInt(document.getElementById("lw1").innerHTML);
l2=parseInt(document.getElementById("lw2").innerHTML);
 d0=parseInt(document.getElementById("d0").innerHTML);

  boton.className="clicked";
  var text;
	 p1=document.getElementById("txtPlayer1").value;
	 p2=document.getElementById("txtPlayer2").value;
	 p1=p1+" X";
	 p2=p2+" O";
	document.getElementById("n1").innerHTML=p1;
		 document.getElementById("n2").innerHTML=p2; 
	 
  if(con%2==0){
   text="O";
	  jugador=document.getElementById("txtPlayer2").value;
	  empate++;
  }else{
   text="X";
	  jugador=document.getElementById("txtPlayer1").value;
	  empate++;
  }
  boton.value=text;

  boton.appendChild(document.createTextNode(text));
  con++;
  asignation(text,boton);
 }
}
function asignation(text,boton){
 if(b1==boton.name){
  b1=text;
 }
 else if(b2==boton.name){
  b2=text;
 }
 else if(b3==boton.name){
  b3=text;
 }
 else if(b4==boton.name){
  b4=text;
 }
 else if(b5==boton.name){
  b5=text;
 }
 else if(b6==boton.name){
  b6=text;
 }
 else if(b7==boton.name){
  b7=text;
 }
 else if(b8==boton.name){
  b8=text;
 }
 else if(b9==boton.name){
  b9=text;
 }
 validation(text);
}
function limpiar(){
	document.getElementById("btnGame1").innerHTML="";
	document.getElementById("btnGame2").innerHTML="";
	document.getElementById("btnGame3").innerHTML="";
	document.getElementById("btnGame4").innerHTML="";
	document.getElementById("btnGame5").innerHTML="";
	document.getElementById("btnGame6").innerHTML="";
	document.getElementById("btnGame7").innerHTML="";
	document.getElementById("btnGame8").innerHTML="";
	document.getElementById("btnGame9").innerHTML="";
	document.getElementById("btnGame1").name="b1";
	document.getElementById("btnGame2").name="b2";
	document.getElementById("btnGame3").name="b3";
	document.getElementById("btnGame4").name="b4";
	document.getElementById("btnGame5").name="b5";
	document.getElementById("btnGame6").name="b6";
	document.getElementById("btnGame7").name="b7";
	document.getElementById("btnGame8").name="b8";
	document.getElementById("btnGame9").name="b9";
	document.getElementById("btnGame1").className="btnGame";
	document.getElementById("btnGame2").className="btnGame";
	document.getElementById("btnGame3").className="btnGame";
	document.getElementById("btnGame4").className="btnGame";
	document.getElementById("btnGame5").className="btnGame";
	document.getElementById("btnGame6").className="btnGame";
	document.getElementById("btnGame7").className="btnGame";
	document.getElementById("btnGame8").className="btnGame";
	document.getElementById("btnGame9").className="btnGame";
	b1="b1";b2="b2";b3="b3";b4="b4";b5="b5";b6="b6";b7="b7";b8="b8";b9="b9";
	empate=0;

}
function validation(text){
 if((b1==b2 && b2==b3)||(b1==b5 && b5==b9)||(b3==b5 && b5==b7)||(b4==b5 && b5==b6)||(b7==b8 && b8==b9)||(b1==b4 && b4==b7)||(b2==b5 && b5==b8)||(b3==b6 && b6==b9)){
  var confi=confirm("Gano el jugador "+jugador+"!\nQuieres jugar de nuevo?");
  if(confi==true){
	  limpiar();
	  if(text=="X"){
		  w1=w1+1;
		  l2=l2+1;
		  document.getElementById("wl1").innerHTML=w1;
		  document.getElementById("lw2").innerHTML=l2;
	  }
	  if(text=="O"){
		  w2=w2+1;
		  l1=l1+1;
		  document.getElementById("wl2").innerHTML=w2;
		  document.getElementById("lw1").innerHTML=l1;
	  }
  
  }
 }
	if(empate==9){
		empate=0;
		d0=d0+1;
		document.getElementById("d0").innerHTML=d0;
		  document.getElementById("d1").innerHTML=d0;
		limpiar();
	}
}