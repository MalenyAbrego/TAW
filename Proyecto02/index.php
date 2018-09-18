<html>
<head>
    <meta charset="utf-8"/>
    <title>Iniciar sesión | DashGames</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="login-box"> 
        <h1>Login</h1>
            <form id="form_index" action="php/login.php" method="POST" accept-charset="utf-8">
                <div class="textbox">
                    <input id="txtUsername" name="username" type="text" required="required" placeholder="Usuario" />
                </div>

                <div class="textbox">
                    <input id="txtPassword" name="password" type="password" required="required" placeholder="Contraseña" />
                </div>
                <input  class="btn" id="btnEnter" type="submit" value="Iniciar sesión" />
                <a href="registro.php"><p>Registrarse</p></a>
            </form>
    </div>
</body>
</html>
