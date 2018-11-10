<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - All Dashboards</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="views/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="views/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="views/assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="views/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="views/assets/vendors/css/base/elisyam-1.5-dark.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="views/assets/img/logo-2.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>


        <?php
  /*if(isset($_GET["action"])){
          $pag=$_GET["action"];
          if( $pag == "inicio" || $pag == "agregar_promociones" || $pag == "agregar_usuarios" || $pag == "ver_promociones" || 
             $pag == "ver_usuarios"){
              include 'modules/encabezado.php';
              include 'modules/menu.php';
          }
        }*/

        if(isset($_GET["action"])){
          $pag=$_GET["action"];
          if( $pag == "inicio2"){
              include 'modules/encabezado.php';
              include 'modules/menu2.php';
          }
        }
   

  ?>


        <?php
    $mvc=new MvcController();
    $mvc->enlacesPaginasController();
        ?>


        <!--TODO-->


        <!-- Begin Vendor Js -->
        <script src="views/assets/vendors/js/base/jquery.min.js"></script>
        <script src="views/assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="views/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="views/assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
    </body>
</html>