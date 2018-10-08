<?php  

	class MvcController{
		//LLAMA A LA PLANTILLA
		public function pagina(){
			//include se utiliza para invocar el archivo que contiene el codigo HTML
			include "views/template.php";
		}

		#ENLACES 
		#------------------------------------
		public function enlacesPaginasController(){
			//Trabajas con los enlaces de las páginas
			//Validamos si la variable "action" viene vacía, es decir, cuando se abre la página por primera vez se debe cargar la vista index.php

			if(isset($_GET["action"])){
				//guardar el valor de la variable action en "views/modules/navegacion.php" en el cual se recibe mediante el método GET esa variable
				$enlaces = $_GET["action"];
			}
			else{
				//Si viene vacío, inicializo con index
				$enlaces="index";
			}
			//Mostrar los archivos de los enlaces de cada una de las secciones: Inicio, nosotros, etc.
			//PARA ESTO HAY QUE MANDAR AL MODELO PARA QUE HAGA DICHO PROCESO Y MUESTRE LA INFORMACIÓN
			$respuesta = Paginas::enlacesPaginasModel($enlaces);

			include $respuesta;

		}

		public function registroUsuarioController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["usuarioRegistro"])){
				$datosController=array("usuario"=>$_POST["usuarioRegistro"],"password"=>$_POST["passwordRegistro"],"email"=>$_POST["emailRegistro"]);

				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::registroUsuarioModel($datosController,"usuarios");

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=ok");

				}
				else{
					header("location:index.php");
				}
			}
		}


		public function ingresarUsuarioController(){
			if(isset($_POST["usuarioIngreso"])){
				$datosController = array("usuario"=>$_POST["usuarioIngreso"],"password" => $_POST['passwordIngreso']);
				$respuesta = Datos::ingresoUsuarioModel($datosController);

				if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){
					session_start();
					$_SESSION['validar'] = true;
					$_SESSION['pass'] = $respuesta['pass'];
					//echo "<script>alert('entro');</script>";
					header('Location: index.php?action=usuarios');
					
				}
				else{
					header('Location: index.php?action=fallo');
				}
			} 
		}

		public function editarUsuarioController(){
			$datosController = $_GET["id"];
			$respuesta = Datos::editarUsuarioModel($datosController, "usuarios");
			echo'<form method="POST">
				<input type="text" value="'.$respuesta["usuario"].'"name="usuarioE" placeholder="Nombre" required><br>
				<input type="text" value="'.$respuesta["password"].'" name="passwordE" placeholder="Contraseña" required><br>
				<input type="email" value="'.$respuesta["email"].'" name="emailE" placeholder="E-mail" required><br>
				 <input type="submit" value="Actualizar">
				 </form>';

		}

		public function actualizarUsuarioController(){
			if(isset($_POST["usuarioE"])){
				$datosController = array("usuario"=>$_POST["usuarioE"], "password"=>$_POST["passwordE"],"email"=>$_POST["emailE"]);
				
				$respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");
				if($respuesta == "success"){
					header("location:index.php?action=usuarios");
				}
				else{
					echo "error";
				}
			}
		}

		public function borrarUsuariosController(){
			if(isset($_GET["id"])){
			$datosController = $_GET["id"];
			/**Llama al modelo de borrarUsuariosModel, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarUsuariosModel("usuarios",$datosController);
			if($respuesta=="success"){
				header("location:index.php?action=usuarios");
			}
		}

		}

		public function mostrarUsuariosController(){
			$respuesta = Datos::mostrarUsuariosModel("usuarios");
		    foreach($respuesta as $row => $item){
		            echo'<tr>
		                <td>'.$item["id"].'</td>
		                <td>'.$item["usuario"].'</td>
		                <td>'.$item["password"].'</td>
		                <td>'.$item["email"].'</td>
		                <td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
		                <td><a href="index.php?action=usuarios&id='.$item["id"].'"><button>Borrar</button></a></td>
		                </tr>';
		    }
		}

		

	}

?>