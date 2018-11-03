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
	public function ingresarUsuarioController(){
			if(isset($_POST["usuario"]) && isset($_POST["password"])){
				$datosController = array("usuario"=>$_POST["usuario"],"password"=>$_POST["password"]);
        echo "<script>alert('1')</script>";
        //echo var_dump($datosController);
				$respuesta = Datos::ingresoUsuarioModel($datosController);
				if($respuesta==1){
					session_start();
					$_SESSION['usuario']= $_POST['usuario'];
					header("location:index.php?action=inicio");
				}else{
					header("location:index.php?action=fallo");
				}
			}
		}
  
 //-------------------------------------------------EQUIPOS------------------------------------------------
    public function agregarEquipoController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["equipo"])){
				$datosController=array("equipo"=>$_POST["equipo"],"categoria"=>$_POST["categoria"]);
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
			$respuesta = Datos::mostrarEquiposModel();
		    foreach($respuesta as $row => $item){
		            echo '<tr>
		                <td>'.$item["id"].'</td>
		                <td>'.$item["equipo"].'</td>
		                <td>'.$item["nombre"].'</td>
                    <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <a href="index.php?action=verEquipos&id='.$item["id"].'"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button></a></td>
		                ';
		    }
		}
    
    public function editarUsuarioController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarUsuarioModel($datosController, "usuarios");
			echo'<form method="POST">
				<input type="hidden" value="'.$respuesta["id"].'" name="idE">
				<input type="text" value="'.$respuesta["usuario"].'"name="usuarioE" placeholder="Nombre" required><br>
				<input type="text" value="'.$respuesta["password"].'" name="passwordE" placeholder="Contraseña" required><br>
				<input type="email" value="'.$respuesta["email"].'" name="emailE" placeholder="E-mail" required><br>
				 <input type="submit" value="Actualizar">
				 </form>';
		}
    
    public function borrarEquiposController(){
			if(isset($_GET["id"])){
			$datosController = $_GET["id"];
			/**Llama al modelo de borrarUsuariosModel, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarUsuariosModel("Equipos",$datosController);
        if($respuesta=="success"){
          header("location:index.php?action=verEquipos");
        }
		  }
		}
    
    public function selectEquiposController(){
			$respuesta = Datos::infoTablasModel("Equipos");
		    foreach($respuesta as $row => $item) {
					echo '
								<option value='.$item["id"].'> '.$item["equipo"].'</option>';
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
        //echo "<script>alert('2');</script>";
        //var_dump($datosController);
        //echo "<script>alert('3');</script>";
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
    
    public function selectJugadoresController(){
			$respuesta = Datos::infoTablasModel("Jugador");
		    foreach($respuesta as $row => $item) {
					echo '
								<option value='.$item["id"].'> '.$item["nombre"].'</option>';
					}
		}
    
    public function borrarJugadoresController(){
			if(isset($_GET["id"])){
			$datosController = $_GET["id"];
			/**Llama al modelo de borrarUsuariosModel, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarUsuariosModel("Jugador",$datosController);
        if($respuesta=="success"){
          header("location:index.php?action=verJugadores");
        }
		  }
		}
    
    public function noJugadoresController(){
			$respuesta = Datos::infoTablasModel("Jugador");
      $total=count($respuesta);
      echo $total;
	}
    
//-------------------------------------------------------CATEGORIAS-----------------------------------
    public function agregarCategoriaController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["nombre"])){
				$datosController=array("nombre"=>$_POST["nombre"]);
//var_dump($datosController);
				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::agregarCategoriaModel($datosController);

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=verCategorias");

				}
				else{
					header("location:index.php");
				}
			}
		}
    
    public function mostrarCategoriasController(){
			$respuesta = Datos::infoTablasModel("categorias");
		    foreach($respuesta as $row => $item){
		            echo '<tr>
		                <td>'.$item["id"].'</td>
		                <td>'.$item["nombre"].'</td>
                    <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <a href="index.php?action=verCategorias&id='.$item["id"].'"><button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button></a></td>
		                ';
		    }
		}
    
    public function borrarCategoriasController(){
			if(isset($_GET["id"])){
			$datosController = $_GET["id"];
			/**Llama al modelo de borrarUsuariosModel, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarUsuariosModel("categorias",$datosController);
        if($respuesta=="success"){
          header("location:index.php?action=verCategorias");
        }
		  }
		}
    
    public function selectCategoriasController(){
			$respuesta = Datos::infoTablasModel("categorias");
		    foreach($respuesta as $row => $item) {
					echo '
								<option value='.$item["id"].'> '.$item["nombre"].'</option>';
					}
		}
    
    public function noCategoriasController(){
			$respuesta = Datos::infoTablasModel("categorias");
      $total=count($respuesta);
      echo $total;
	}
    
 //-------------------------------------ASIGNACIONES-----------------------------------------------
  public function agregarAsignacionController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["jugador"])){
				$datosController=array("jugador"=>$_POST["jugador"],"equipo"=>$_POST["equipo"]);
				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::agregarAsignacionModel($datosController);

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=verAsignaciones");

				}
				else{
					header("location:index.php");
				}
			}
		}
   
  public function mostrarAsignacionesController(){
			$respuesta = Datos::mostrarAsignacionesModel();
		    foreach($respuesta as $row => $item){
		            echo'<tr>
		                
		                <td>'.$item["nombre"].'</td>
                    <td>'.$item["equipo"].'</td>
		                ';
		    }
		}
    
    

    
    
    

	}