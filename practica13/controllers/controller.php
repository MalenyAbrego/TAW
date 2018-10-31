<?php

	class MvcController{

		public function pagina(){

			include "views/template.php";
		}

		public function enlacesPaginasController(){
			if(isset($_GET['action'])){
				$enlaces=$_GET['action'];
			}
			else{
				$enlaces="index";
			}

			$respuesta=Paginas::enlacesPaginasModel($enlaces);

			include $respuesta;
		}
    
    #ingreso del login
	public function ingresoUsuarioController(){
		#obtencion de los datos por el metodo post del form del login
		if(isset($_POST["Login"])){
			#los valores obtenidos del formulario se guardan en un array
			$datosController = array ("usename" => $_POST["username"],
										"password" => $_POST["password"]);
			#se manda a llamar a CRUD para saber si los datos ingresados son correctos junto con la tabla en la cual buscara
			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");
			#si hay una respuesta entra en el if
			if($respuesta){
				session_start();#se inicia sesion
				#variables de sesion que guardaran datos ya que se pueden enviar entre paginas 
				$_SESSION["validar"] = true;
				$_SESSION["username"] = $respuesta["username"];
				$_SESSION["id"] = $respuesta["id_usuario"];
				header("location:index.php?action=inicio");
			}else{
				#en caso de fallar arrojara una alerta
				header("location:index.php?action=fallo");
			}
		}
	}
  
 //-------------------------------------------------EQUIPOS------------------------------------------------
    public function agregarEquipoController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["nombre"])){
				$datosController=array("nombre"=>$_POST["nombre"],"categoria"=>$_POST["categoria"]);
//var_dump($datosController);
				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::agregarEquipoModel($datosController);

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=verEquipos");

				}
				else{
					header("location:index.php");
				}
			}
		}
    
    public function mostrarEquiposController(){
			$respuesta = Datos::infoTablasModel("Equipos");
		    foreach($respuesta as $row => $item){
		            echo '<tr>
		                <td>'.$item["id"].'</td>
		                <td>'.$item["nombre"].'</td>
		                <td>'.$item["categoria"].'</td>
                    <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <a href="index.php?action=categorias&id='.$item["id"].'"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button></a></td>
		                ';
		    }
		}
    
    public function noEquiposController(){
			$respuesta = Datos::infoTablasModel("Equipos");
      $total=count($respuesta);
      echo $total;
	}
    
 //---------------------------------------------JUGADORES-----------------------------------------------------
    public function agregarJugadorController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["nombre"])){
				$datosController=array("nombre"=>$_POST["nombre"],"email"=>$_POST["email"]);
        var_dump($datosController);
				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::agregarJugadorModel($datosController);

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=verJugadores");

				}
				else{
					header("location:index.php");
				}
			}
		}
    
    public function mostrarJugadoresController(){
			$respuesta = Datos::infoTablasModel("Jugador");
		    foreach($respuesta as $row => $item){
		            echo '<tr>
		                <td>'.$item["id"].'</td>
		                <td>'.$item["nombre"].'</td>
		                <td>'.$item["email"].'</td>
                    <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <a href="index.php?action=verJugadores&id='.$item["id"].'"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button></a></td>
		                ';
		    }
		}
    
    public function noJugadoresController(){
			$respuesta = Datos::infoTablasModel("Jugador");
      $total=count($respuesta);
      echo $total;
	}
    

	}