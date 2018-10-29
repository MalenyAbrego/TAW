<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
 <div class="page-body">
<div class="row">
    <div class="col-sm-12">
<div class="card">
<div class="card-header">
    <h5>Agregar Categoria</h5>
    <div class="card-header-right"><i
            class="icofont icofont-spinner-alt-5"></i></div>

    <div class="card-header-right">
        <i class="icofont icofont-spinner-alt-5"></i>
    </div>

</div> 
<div class="card-block">
<form method="POST">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre de categoría" name="nombreC">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Descripción de categoría" name="descripcionC">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-round" data-dismiss="modal"><i class="icofont icofont-plus-square"></i>Agregar</button>
          </form>
</div>
</div>
  </div>
   </div>
</div>
      </div>
  </div>
  </div>
</div>


<?php
	//Enviar los datos al controlador MvcController (es la clase principal de controller.php)
	$agregarCategoria=new MvcController();

	//Se invoca la funcion registroUsuarioController de la clase MvcController:
	$agregarCategoria->agregarCategoriaController();

	if(isset($_GET["action"])){
		if($_GET["action"]=="ok"){
			echo "¡Registro exitoso!";
		}

	}


?>



