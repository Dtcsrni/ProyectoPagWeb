<?php
session_start();
require 'conexion.php';
$usuario = $_SESSION['usuario'];


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['tel'];
$met_con = $_POST['met_con'];
$comentario = $_POST['comentario'];

$ingresa = "INSERT INTO contactos (nombre,email,telefono,met_con,coment) VALUES ('$nombre', '$email', '$telefono', '$met_con', '$comentario')";
$result = mysqli_query($conexion,$ingresa);

if($result != TRUE){
    echo "<div class=\"mensajeErroneo\"> Error al ingresar contacto </div>";
    die();
  }
  else{
    echo "<div class=\"mensaje\">Exito </div>";
  }
  
$cerrar = mysqli_close($conexion);
echo "Gracias $usuario, hemos recibido sus datos";
echo "<br>";
echo '<a href="index.php"> Regresar a la página principal</a>';
?>