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
    <h5>Agregar Usuario</h5>
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
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                </div>
            </div>
    <div class="form-group row">
                <label class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre de Usuario" name="nombre_usuario">
                </div>
            </div>
    <div class="form-group row">
                <label class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                </div>
            </div>
    <div class="form-group row">
                <label class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Correo" name="correo">
                </div>
            </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="Contraseña" name="fecha_registro">
                </div>
            </div>
               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="ruta_img">
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

$agregarCategoria = new MvcController();
$agregarCategoria->agregarCategoriaController();

?>