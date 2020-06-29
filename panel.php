
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="css/panel.css">
</head>
<body>
<div class="panel">
<?
//Inicia sesion
session_start();

if (!isset($_SESSION['usuario'])) {
   echo "";
   die();
}
else{
    $usuario = $_SESSION['usuario'];

    echo "<h1>Bienvenido $usuario</h1>";
       
}
?>
<br>

<a href="busqueda.php" class="boton"><h2>Consultar mensajes</h2> </a>
<a href="modificar.php" class="boton"><h2>Modificar contactos</h2> </a>
<a href="borrar.php" class="boton"><h2>Borrar contactos</h2></a>
<a href="salir.php" class="boton"><h2>Cerrar sesión</h2></a>

</div>
<footer>
<br>

    <a href="index.php" class="boton">Regresar al inicio</a>
</footer> 
</body>
</html>

