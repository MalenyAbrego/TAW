<?php
	//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
	$agregar=new MvcController();
  $selectJugadores=new MvcController();
  $selectEquipos=new MvcController();

	//Se invoca la funcion registroUsuarioController de la clase MvcController:
if ($_POST){
  echo "<script>alert('1');</script>";
  $agregar->agregarAsignacionController();
}
	

	if(isset($_GET["action"])){
		if($_GET["action"]=="ok"){
			echo "¡Registro exitoso!";
		}

	}


?>   
<div class="content-wrapper">
  <!-- Main content -->
    <section class="content" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Asignación de equipos y jugadores</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Jugador:</label><div class="col-sm-10">
                  <select class="form-control" name="jugador">
                    <?php $selectJugadores->selectJugadoresController(); ?>
                    
                  </select></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Equipo:</label><div class="col-sm-10">
                  <select class="form-control" name="equipo">
                    <?php $selectEquipos->selectEquiposController(); ?>
                    
                  </select></div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Agregar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
      </div>
    </section>
  </div>
