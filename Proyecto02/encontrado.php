<?php
include 'php/conexion.php';
session_start();
if(isset($_SESSION['user'])){
    $usuario=$_SESSION['buscar'];
    $db=getConnection();
    $stmt = $db->prepare("SELECT * FROM usuario WHERE username='$usuario'");
    $stmt->execute();
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/paginas.css">
    <title>Perfil</title>
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
    	</div>
        <div id="cuerpo">
            
            <div>
                <table>
                    <tr>
                        <td><h1>Perfil</h1></td>
                        <td>
                            <form action="seguir.php" method="post">
                                <input type="submit" name="seguir" value="Seguir">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="imagen">
                <img src="img/perfil.jpg" width="100%" height="85%" >
                <p align="center"><?=$r['username'];?></p>
            </div>

            <div id="informacion">
                <p style="font-size: 30px">Nombre: <?=$r['nombre'];?></p>
                <p style="font-size: 30px">Apellidos: <?=$r['apellidos'];?></p>
                <p style="font-size: 30px">Fecha de Nacimiento: <?=$r['fecha_nacimiento'];?></p>
                <p style="font-size: 30px">Correo: <?=$r['correo'];?></p>
                <p style="font-size: 30px">Sexo: <?=$r['sexo'];?></p>
                <p style="font-size: 30px"><big>Cosas sobre mi: </big></p>
                <div id="cosas_mias">
                    Mi nombre no es aaron.
                </div>
            </div>
            

        </div>
    </div>
</body>
</html>
<?php
}else{
    header('Location: index.php');
}
?>