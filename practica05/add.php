<?php
include_once('db/database_utilities.php');

    $id_type = $_GET["t"];
if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['posicion']) && isset($_POST['carrera']) && isset($_POST['email'])){
  add($_POST['id'],$_POST['nombre'],$_POST['posicion'],$_POST['carrera'],$_POST['email'],$id_type);
  header("location: listado.php?t=".$id_type);
    }

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar Nuevo Usuario</h3>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="add.php?t=<?php echo($id_type) ?>">
                  <label for="id">Id:</label>
                  <input type="text" name="id" required><br>

                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre" required><br>

                  <label for="posicion">Posición:</label>
                  <input type="text" name="posicion" required><br>

                  <label for="carrera">Carrera:</label>
                  <input type="text" name="carrera"><br>

                  <label for="email">Correo electrónico:</label>
                  <input type="email" name="email" required><br>

                  <button type="submit" class="success">Guardar</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>