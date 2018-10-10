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
		public function selCarrera(){
		#Muestra a todos los profesores existentes
			
        $respuesta = Datos::VerTablasModel("carrera");
       
        foreach($respuesta as $row => $item) {
			echo '<option value='.$item["id"].'> '.$item["nombre"].' </option>';
			}
			
        }
        public function selTutor(){
		#Muestra a todos los profesores existentes
			
        $respuesta = Datos::VerTablasModel("tutor");
       
        foreach($respuesta as $row => $item) {
			echo '<option value='.$item["id"].'> '.$item["nombre"].' </option>';
			}
			
        }

		public function registroUsuarioController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			if(isset($_POST["matriculaRegistro"])){
				$datosController=array("matricula"=>$_POST["matriculaRegistro"],
					"nombre"=>$_POST["usuarioRegistro"],
					"carrera"=>$_POST["carreraRegistro"],
					"situacionA"=>$_POST["situacionARegistro"],
					"email"=>$_POST["emailRegistro"],
					"tutor"=>$_POST["tutorRegistro"]);

				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::registroUsuarioModel($datosController,"alumno");

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=ok");

				}
				else{
					header("location:index.php");
				}
			}
		}

		public function editarUsuarioController(){
			$datosController = $_GET["matricula"];
			$respuesta = Datos::editarUsuarioModel($datosController, "alumno");

			$datosControllers = array ("id"=> $respuesta["carrera"]);
		    $carrera= Datos::VerTablasModel("carrera",$datosControllers);

		    $datosControllers = array ("id"=> $respuesta["tutor"]);
		    $tutor= Datos::VerTablasModel("tutor",$datosControllers);

			echo'<form method="POST">
				<input type="hidden" value="'.$respuesta["matricula"].'" name="matricula">
				<input type="text" value="'.$respuesta["nombre"].'"name="nombreE" placeholder="Nombre" required><br>
				<input type="email" value="'.$respuesta["email"].'" name="emailE" placeholder="E-mail" required><br>
				 <input type="submit" value="Actualizar">
				<select name="carrera">
		           <option value="'.$respuesta["id"]. '">'.$carrera["nombre"]. '</option>';
		    $respuestas = Datos::VerTablasModel("carrera");
		    foreach($respuestas as $row => $item) {
					echo '
								<option value='.$item["id"].'> '.$item["nombre"].'</option>';
					}
		              
		    echo'        
    			</select>

				 </form>';

		}

		public function actualizarUsuarioController(){
			if(isset($_POST["usuarioE"])){
				$datosController = array("id"=>$_POST["idE"],"usuario"=>$_POST["usuarioE"], "password"=>$_POST["passwordE"],"email"=>$_POST["emailE"]);

				$respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");
				if($respuesta =="success"){
					header("location:index.php?action=usuarios");
				}
				else{
					echo "error";
				}
			}
		}

		public function borrarUsuariosController(){
			if(isset($_GET["matricula"])){
			$datosController = $_GET["matricula"];
			/**Llama al modelo de borrarUsuariosModel, se manda el id y el nombre
			de la tabla del cual se va a eliminar el registro**/
			$respuesta = Datos::borrarUsuariosModel("usuarios",$datosController);
			if($respuesta=="success"){
				header("location:index.php?action=usuarios");
			}
		}

		}

		public function mostrarUsuariosController(){
			$respuesta = Datos::mostrarUsuariosModel();
		    foreach($respuesta as $row => $item){
		            echo'<tr>
		                <td>'.$item["matricula"].'</td> 
		                <td>'.$item["nombre"].'</td>
		                <td>'.$item["carrera"].'</td>
		                <td>'.$item["situacionA"].'</td>
		                <td>'.$item["email"].'</td>
		                <td>'.$item["tutor"].'</td>
		                <td><a href="index.php?action=editar&id='.$item["matricula"].'"><button>Editar</button></a></td>
		                <td><a href="index.php?action=usuarios&id='.$item["matricula"].'"><button>Borrar</button></a></td>
		                </tr>';
		    }
		}

		

	}

?>