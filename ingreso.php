
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="css/panel.css">
</head>
<body>

<?
//Inicia sesion
session_start();
require 'conexion.php';

$usuario = $_POST['usuario'];
$password =$_POST['pass'];

$consulta = "SELECT COUNT(*) as contador from usuarios where user = '$usuario' AND pass='$password'";
$sql = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($sql);




//Confirmar la conexión a la BD
if($array["contador"]==0){
    echo "<div class=\"mensaje\"> El nombre de usuario es incorrecto </div>";
    echo "</br>";
    echo '<a href="acceso.php" class="boton"> <- Intentar de nuevo</a>';
}
else{
    $_SESSION['usuario'] = $usuario;
    header("location: panel.php");
}

?>
</body>
</html>

