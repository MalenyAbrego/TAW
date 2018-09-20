<?php

include_once('db/database_utilities.php');

  if(isset($_POST['email']) && isset($_POST['password'])){
    login($_POST['email'], $_POST['password']);
    header("Location:index.php");
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
    
    <!--?php require_once('header.php'); ?-->

    <div class="row">
 
      <div class="row">
 
      <div class="large-9 columns">
        <h3>Iniciar sesión</h3>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="login.php">
                  <label for="email">Usuario:</label>
                  <input type="email" name="email" required><br>
                  <label for="password">Contraseña:</label>
                  <input type="password" name="password" required><br>
                  <button type="submit" class="success">Iniciar sesión</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>



    <?php require_once('footer.php'); ?>
