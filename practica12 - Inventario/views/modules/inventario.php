<?php

	//$agregar= new MvcController();
	$mostrar= new MvcController();
	//Se invoca la funcion mostrarUsuariosController de la clase MvcController:
	
	
	

	if(isset($_GET["action"])){
	
		if($_GET["action"]=="ok"){
			echo "¡Registro exitoso!";
		}

	}

?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                <!-- Page-header start -->

                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
<div class="page-body">
    <!-- Basic table card start -->
    <div class="card">
        <div class="card-header">
<h5>
  PRODUCTOS
          </h5><br><br>
           
            <div class="card-header-right">    <ul class="list-unstyled card-option"> </ul></div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoría</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      $mostrar->mostrarProductosController();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                              </div>
                          </div>
                      </div>
</div>



  


