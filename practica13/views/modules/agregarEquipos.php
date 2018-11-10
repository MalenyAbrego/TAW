<?php
	//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
	$agregar=new MvcController();
  $select=new MvcController();

	//Se invoca la funcion registroUsuarioController de la clase MvcController:
if ($_POST){
  echo "<script>alert('1');</script>";
  $agregar->agregarEquipoController();
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
              <h3 class="box-title">Agregar Equipo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre</label><div class="col-sm-10">
                    <input type="text" class="form-control" name="equipo" placeholder="Nombre del equipo">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Categoría</label><div class="col-sm-10">
                  <select class="form-control" name="categoria">
                    <?php $select->selectCategoriasController(); ?>
                    
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
