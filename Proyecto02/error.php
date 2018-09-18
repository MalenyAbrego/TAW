<?php
session_start();
if(isset($_SESSION['user'])){
?>

<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
    <title>Error</title>
</head>
<body>
           
  	<div id="superior">
    		<table align="center" style="width: 100%; height: 100%">
                <tr style="border-style: solid;">

                    <td style="border-style: solid;">
                        <center><a href="home.php" style="">Inicio</a></center>
                    </td>

                    <td style="border-style: solid;">
                        <form action="php/buscar.php" method="post" style="margin-left: 50px;" accept-charset="utf-8">
                            <input id="search" type="search" name="search" placeholder="Buscar...">
                            <input type="submit" name="buscar" value="Buscar">
                        </form>
                    </td>

                    <td style="border-style: solid;">
                        <select name="formal" style="float: right;" onchange="javascript:handleSelect(this)">
                            <option></option>
                            <option value="home">Inicio</a></option>
                            <option value="opciones">Opciones</option>
                            <option value="perfil">Perfil</option>
                            <option value="php/login">Salir</option>
                        </select>
                        <script type="text/javascript">
                            function handleSelect(elm){
                                window.location = elm.value+".php";
                            }
                        </script>
                    </td>
                </tr>
            </table>
    	</div>
    	<div id="izquierdo">
    		<h3>Resultados de juegos</h3>
    	</div>
        <div id="cuerpo">
            <h1>Lo sentimos...u.u <br>No se encontró la página que busca.<br>Intentelo después.</h1>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header('Location: index.php');
}
?>