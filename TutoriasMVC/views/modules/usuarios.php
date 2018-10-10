

<h1>ALUMNOS</h1>

<div class="col-sm-12">
          <table>
              <thead>
              <tr>
                  <th>Matricula</th>
                  <th>Nombre</th>
                  <th>Carrera</th>
                  <th>Situación acamdémica</th>
                  <th>Email</th>
                  <th>Tutor</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
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
