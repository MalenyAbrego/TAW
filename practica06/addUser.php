<?php
include_once('db/database_utilities.php');


if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['status']) && isset($_POST['id_type'])){
  addUser($_POST['email'], $_POST['password'], $_POST['status'], $_POST['id_type']);
  header("location: index.php");
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
                <form method="POST" action="addUser.php">
                  <label for="email">Correo electrónico:</label>
                  <input type="email" name="email" required><br>
                  <label for="password">Contraseña:</label>
                  <input type="password" name="password" required><br>
                  <input type="radio" name="status" value="1" required>
                  <label for="status">Activo</label>
                  <input type="radio" name="status" value="2" required>
                  <label for="status">Inactivo</label>
                  <label for="id_type">Id tipo:</label>
                  <select name="id_type" >
                    <option value="1">fsfs</option>
                    <option value="2">sdcs</option>
                  </select>
                  <button type="submit" class="success">Guardar</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>