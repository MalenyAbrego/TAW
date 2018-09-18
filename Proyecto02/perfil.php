<?php
include 'php/conexion.php';
session_start();
if(isset($_SESSION['user'])){
    $usuario=$_SESSION['user'];
    $msj="Bienvenido! " . $usuario;
    $db=getConnection();
    /*$stmt = $db->prepare("SELECT id,nombre,apellidos,fecha_nacimiento,sexo,correo,username FROM 
                            usuario WHERE username='$usuario'");*/
	$stmt = $db->prepare("SELECT id, username, nombre, apellidos, password, fecha_nacimiento, sexo, correo,idUsuario, ng1, ni1, uf1, ng2, ni2, uf2, ng3, ni3, uf3 FROM usuario INNER JOIN registroj ON usuario.id = registroj.idUsuario where username='$usuario';");
    $stmt->execute();
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
	$idu = $r['id'];
	$rutai=  "img/".$idu.".jpg";
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
            
            <div >
            <h1>Perfil</h1>

                <div class="edit">
                    <a href="#">Editar</a>
                </div>
            </div>
            <div id="imagen">
                <img src="<?=$rutai;?>" width="100%" height="85%" >
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
                    <p>Juego 1 </p>
                    <p> No. de Partidas Ganadas: <?=$r['ng1'];?></p>
                    <p> No. de Intentos: <?=$r['ni1'];?></p>
                    <p> Ultima Partida: <?=$r['uf1'];?></p>
                    <p>Juego 2 </p>
                    <p> No. de Partidas Ganadas: <?=$r['ng2'];?></p>
                    <p> No. de Intentos: <?=$r['ni2'];?></p>
                    <p> Ultima Partida: <?=$r['uf2'];?></p>
                    <p>Juego 3 </p>
                    <p> No. de Partidas Ganadas: <?=$r['ng3'];?></p>
                    <p> No. de Intentos: <?=$r['ni3'];?></p>
                    <p> Ultima Partida: <?=$r['uf3'];?></p>
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