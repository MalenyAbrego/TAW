<!--?php
include 'php/conexion.php';
session_start();
if(isset($_SESSION['user'])){
	
?-->

<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
    <title>Home</title>
</head>
<body>
    <div id="principal">

        
    	<div id="superior">
    		<table align="center" style="width: 100%; height: 100%">
                <tr style="border-style: solid;">

                    <td style="border-style: solid;">
                        <center><a href="home.php" style="">Inicio</a></center>
                    </td>

                    <td style="border-style: solid;">
                        <form action="php/buscar.php" method="post" style="margin-left: 50px;">
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
            <div class="dropdown-content">
                <a href="Juegos/memorama/index.html" target="frame" onClick="juego1"><?php echo "Memorama "?></a>
                <br>
                <a href="Juegos/miau/index.html" target="frame" onClick="juego2"><?php echo "Gato"?></a>
                <br>
                <a href="Juegos/Minas/index.html" target="frame" onClick="juego3"><?php echo "Busca Minas"?></a>
            </div>
    	</div>
        <div id="cuerpo">
            <h1>Home</h1>
            <div class="prin" align="center">
            <iframe name="frame" frameborder="0" style="width: 80%"; height="700px" >
            </iframe>
            </div>
        </div>
    </div>
    <footer class="pie">
        
    </footer>
</body>
</html>

<!--?php
}else{
    header('Location: index.php');
}
?-->