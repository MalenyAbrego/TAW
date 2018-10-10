<?php
	session_start();
	if(!$_SESSION["validar"]){
		header("location:index.php?action=ingresar");
		exit();
	}
?>

<h1>PROFESORES</h1>

<div class="col-sm-12">
          <table>
              <thead>
              <tr>
                  <th>#</th>
                  <th>Usuario</th>
                  <th>Correo</th>
                  <th>Contraseña</th>
                  <th></th>
                  <th></th>
              </tr>
              </thead>
              <tbody>
                <?php
                  $mostrar= new MvcController();
	//Se invoca la funcion mostrarUsuariosController de la clase MvcController:
	$mostrar->mostrarUsuariosController();
  $mostrar->borrarUsuariosController();
                 
                ?>
              </tbody>
          </table>

    </div>
