<?php
session_start();
if(isset($_SESSION['user'])){
    include 'php/conexion.php';
    $persona=$_SESSION['buscar'];
    $db=getConnection();
    $stmt = $db->prepare("SELECT * FROM usuario WHERE username='$persona'");
    $stmt->execute();
?>

<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
    <title>Busqueda de amigos</title>
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
            <h1>Busqueda...</h1>
            <?php 
            while($r = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div style="border: double;width: 80%;height: 30%;margin-left: 10%;">
                        <div style="float:left;border: solid;">
                            <img src="img/perfil.jpg" style="height: 95%;width: 70%;margin-left: 15%;">
                        </div>
                        <div>
                            <a href="encontrado.php"><p><?=$r['username']?></p></a>
                            <p><?=$r['correo']?></p>
                            <form action="seguir.php" method="post">
                                <input type="submit" name="seguir" value="Seguir">
                            </form>
                        </div>
                    </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header('Location: index.php');
}
?>