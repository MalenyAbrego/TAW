<?php


	$mostrar= new MvcController();
	//Se invoca la funcion mostrarUsuariosController de la clase MvcController:
	
	

	if(isset($_GET["action"])){
	
		if($_GET["action"]=="ok"){
			echo "¡Registro exitoso!";
		}

	}

?>
?>
<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>CATEGORIAS</h5><br><br>
             
            <div class="card-header-right"><ul class="list-unstyled card-option"></ul></div>
            </div>
            <div class="card-block table-border-style">
              <div class="table-responsive">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                        $mostrar->mostrarCategoriasController();
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



