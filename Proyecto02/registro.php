<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        function Validar(){
            if(document.radio.sexo[0].checked==false&&document.radio.sexo[1].checked==false){
                alert('Falta llenar genero');
                return false;
            }
            return true;
        }
    </script>
    <meta charset="utf-8"/>
    <title>Registro</title>
</head>
<body>
    <div>
        <h1>Registro:</h1>
        <form id="form_registro" name="radio" onsubmit="return Validar()" action="php/newuser.php" 
                method="POST" accept-charset="utf-8">
        	<label for="txtNombre">Nombre(s):</label>
        	<input type="text" name="nombre" required="required">
        	<br>

        	<label for="txtApellido">Apellidos</label>
        	<input type="text" name="apellidos" required="required">
        	<br>
        <!--
        	<label for="txtedad">Edad:</label>
        	<input type="number" name="edad" required="required">
        	<br>
        -->
        	<label for="txtFechNac">Fecha de Nacimiento:</label>
        	<input type="date" name="fechNac" required="required">
            <br>

        	<div>
        		<label for="txtSexo">Sexo:</label>
        		<input type="radio" name="sexo" value="hombre">H
        		<input type="radio" name="sexo" value="mujer">M
        	</div>

        	<label for="txtCorreo">Correo:</label>
        	<input type="email" name="correo" required="required">
        	<br>

        	<label for="txtUsername">Username:</label>
        	<input type="text" name="username" required="required">
            <br>

            <label for="txtPass">Contraseña:</label>
            <input type="password" name="pass"  required="required">
            <br>

            <label for="txtPassconfirm">Confirmar Contraseña:</label>
            <input type="password" name="passdos"  required="required">
        	<br>

        	<input type="checkbox" name="terminos"  required="required">
        	<a href="html/terminos.html"><label for="txtCondicion">Terminos y condiciones</label></a>
            <br>

        	<input type="submit" value="Crear Cuenta">
            <input type="reset" name="limpiar">
            <br>
            <a href="index.php">Ya tengo una cuenta</a>
        </form>
    </div>
</body>
</html>