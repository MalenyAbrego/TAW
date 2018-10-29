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
    <h5>Agregar Producto</h5>
    <div class="card-header-right"><i
            class="icofont icofont-spinner-alt-5"></i></div>

    <div class="card-header-right">
        <i class="icofont icofont-spinner-alt-5"></i>
    </div>

</div> 
<div class="card-block">
<form method="POST">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Código</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Código del producto" name="codigo">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre">
                </div>
            </div>
              <!--div class="form-group row">
                <label class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="fecha_agregado">
                </div>
            </div-->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Precio del producto" name="precio">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Stock del producto" name="stock">
                </div>
            </div>
            
             <div class="form-group row">
              <label class="col-sm-2 col-form-label">Categoría</label>
              <div class="col-sm-10">
                  <select name="select" class="form-control" name="categoria">
                      <?php
                    $categoria = new MvcController();
                    $categoria->selectCategoriasController();
                    ?>
                  </select>
              </div>
          </div>
               <!--div class="form-group row">
              <label class="col-sm-2 col-form-label">Imagen</label>
              <div class="col-sm-10">
                  <input type="file" class="form-control" name="ruta_img">
              </div>
          </div-->
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

$agregarProducto = new MvcController();
$agregarProducto->agregarProductoController();

?>