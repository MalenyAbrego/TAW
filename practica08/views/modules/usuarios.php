<?php
  //si no existe un usuario logueado se procede a ir al formulario de ingresar
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("location: index.php?action=ingresar");
    exit();
  }
?>

<h1>USUARIOS REGISTRADOS</h1>

<div class="col-sm-12">
          <table>
              <thead>
              <tr>
                  <th>#</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Correo</th>
                  <th></th>
                  <th></th>
              </tr>
              </thead>
              <tbody>
                <?php
                  $mostrar= new MvcController();
                  $borrar= new MvcController();
	//Se invoca la funcion mostrarUsuariosController de la clase MvcController:
	$mostrar->mostrarUsuariosController();
  
  $borrar->borrarUsuariosController();
                 
                ?>
              </tbody>
          </table>

    </div>
