<h1>Sesión finalizada</h1>
<?php

session_start();
session_destroy();
header('Location: index.php?action=ingresar');

?>