<?php

  //si no existe un usuario logueado se procede a ir al formulario de ingresar

  
$jugadores= new MvcController();
$equipos= new MvcController();
$categorias= new MvcController();

?>

<div class="content-wrapper">
  <!-- Main content -->
    <section class="content" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
        
          <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jugadores->noJugadoresController(); ?></h3>

              <p>Jugadores</p>
            </div>
            <div class="icon">
              <i class="ion-ios-person"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $categorias->noCategoriasController(); ?><sup style="font-size: 20px"></h3>

              <p>Categorías</p>
            </div>
            <div class="icon">
              <i class="ion-ios-football"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $equipos->noEquiposController(); ?></h3>

              <p>Equipos</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
    
        <!-- ./col -->
      </div>
          
             </div>
      </div>
    </section>
  </div>