<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if($varsesion!=null || $varsesion!=''){
    
    header("location: panel.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer formulario</title>
    <!--JQUUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Bootstrap para los estilos de la página-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--Los estilos de la página fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!--Nuestros estilos-->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 principal">
            <div class="modal-content">
                <div class="col-12" class="imagen-user">
                    <img src="image/avatar.png" alt="usuario" width="50%">
                </div>
                <form action="ingreso.php" method="POST" class="col-12">
                    <div class="form-group">
                        <input name="usuario" type="text" class="form-control" placeholder="Nombre del usuario" required>
                    </div>
                    <div class="form-group">
                        <input name="pass" type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class= "fas fa-sign-in-alt"></i>Pique aca</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
<br>

    <a href="index.php" class="boton">Regresar al inicio</a>
</footer> 
</body>
</html>