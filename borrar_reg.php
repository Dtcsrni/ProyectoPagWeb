<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizado</title>
    <link rel="stylesheet" href="css/resultados.css">
</head>
<body>
    


<?php
//Inicia la sesión
  session_start();
  error_reporting(0);
$varsesion=$_SESSION['usuario'];
if($varsesion==null || $varsesion=''){
    echo 'Usted no tiene autorización para esta página';
    die();
}

  require 'conexion.php';

  $id=$_POST['id_con'];
  $nombre=$_POST['nombre'];
  $email=$_POST['email'];
  $telefono=$_POST['tel'];
  $met_con=$_POST['met_con'];
  $comentario=$_POST['comentario'];
 
  $sql="DELETE FROM contactos WHERE telefono='$telefono'";
  $result = mysqli_query($conexion,$sql);


  if($result != TRUE){
    echo "<div class=\"mensajeErroneo\"> Error al borrar datos </div>";
  }
  else{
    echo "<div class=\"mensaje\"> Los datos han sido eliminados </div>";
  }


	$cerrar=mysqli_close($conexion);
	
  ?>

<br>

    <a href="index.php" class="boton">Regresar al inicio</a>
</body>
</html>

