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
  
  //--------------------------------- T A B L A S -----------------------------------------
  public function mostrarCategoriasController(){
			$respuesta = Datos::infoTablasModel("categorias");
		    foreach($respuesta as $row => $item){
		            echo '<tr>
		                <td>'.$item["nombre"].'</td>
		                <td>'.$item["descripcion"].'</td>
		                <td>'.$item["fecha_agregado"].'</td>
                    <td><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button>
                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></td>
		                ';
		    }
		}
  
  public function mostrarUsuariosController(){
			$respuesta = Datos::infoTablasModel("usuarios");
		    foreach($respuesta as $row => $item){
		            echo '<tr>
                    <td>'.$item["id"].'</td>
		                <td>'.$item["nombre"].'</td>
		                <td>'.$item["apellido"].'</td>
                    <td>'.$item["nombre_usuario"].'</td>
                    <td>'.$item["correo"].'</td>
		                <td>'.$item["fecha_registro"].'</td>
                    <td><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button>
                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></td>
		                ';
		    }
		}
  
  public function mostrarProductosController(){
			$respuesta = Datos::infoTablasModel("productos");
		    foreach($respuesta as $row => $item){
		            echo '<tr>
                    <td>'.$item["codigo"].'</td>
		                <td>'.$item["nombre"].'</td>
		                <td>'.$item["fecha_agregado"].'</td>
                    <td>'.$item["precio"].'</td>
                    <td>'.$item["stock"].'</td>
                    <td>'.$item["categoria"].'</td>
                    <td><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button>
                    <button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></td>
		                ';
		    }
		}
  
  //-----------------------------------------------------------------------------------------
  
  //--------------------------------- S E L E C T -----------------------------------------
  public function selectCategoriasController(){
			$respuesta = Datos::infoTablasModel("categorias");
		    foreach($respuesta as $row => $item) {
					echo '
								<option value='.$item["id"].'> '.$item["nombre"].'</option>';
					}
		}
  
  //---------------------------------------------------------------------------------------
  public function agregarProductoController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
		$fecha=date("d/m/Y");	
    if(isset($_POST["nombreP"])){
				$datosController=array("codigo"=>$_POST["codigo"],"nombre"=>$_POST["nombre"],"fecha_agregado"=>$fecha,
                               "precio"=>$_POST["precio"],"stock"=>$_POST["stock"],"categoria"=>$_POST["categoria"]);

				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::agregarProductoModel($datosController);

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=ok");

				}
				else{
					header("location:index.php");
				}
			}
		}
  
  public function agregarCategoriaController(){
			//Recibe a través del método POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array.
			//$fecha=date("d/m/Y");
			if(isset($_POST["nombreC"])){
				$datosController=array("nombre"=>$_POST["nombreC"],"descripcion"=>$_POST["descripcionC"]);

				//Se le dice al modelo models/crud.php (Datos::registroUsuariosModel), que en la clase "Datos", la funcion "registroUsuariosModel" reciba en sus 2 parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
				$respuesta= Datos::agregarCategoriaModel($datosController);

				//Se imprime la respuesta en la vista
				if($respuesta=="success"){
					header("location:index.php?action=ok");

				}
				else{
					header("location:index.php");
				}
			}
		}
  
  public function ingresaUsuarioController(){
        if(isset($_POST["nombre_usuario"])){
			$datosController = array( "nombre_usuario"=>$_POST["nombre_usuario"], 
								      "password"=>$_POST["password"]);
			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

			if($respuesta["nombre_usuario"] == $_POST["nombre_usuario"] && $respuesta["password"] == $_POST["password"]){
				session_start();
				$_SESSION["validar"] = true;
				header("location:index.php?action=inventario");
			}else{
				header("location:index.php?action=fallo");
			}
		}	
	}
  
	}