<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if($varsesion==null || $varsesion=''){
    echo 'Usted no tiene autorización para esta página';
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar por teléfono</title>
    <!--JQUUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Bootstrap para los estilos de la página-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--Los estilos de la página fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!--Nuestros estilos-->
    <link rel="stylesheet" href="css/busqueda.css">
</head>
<body>
</br>
    <h1 style="text-align: center; color: #fff;">Eliminación de contacto por el teléfono</h1>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 principal">
            <div class="modal-content">
                <div class="col-12 imagen-user">
                </div>
                <form action="eliminar.php" method="POST" class="col-12">
                    <div class="form-group" id="tel-group">
                    <i class="fas fa-phone"></i>
                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono del usuario" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Buscar</button>
                </form>
            </div> 
        </div>
    </div>
    <br>

    <a href="index.php" class="boton">Regresar al inicio</a>
</body>
</html>