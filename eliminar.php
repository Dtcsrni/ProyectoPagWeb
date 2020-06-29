<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
if($varsesion==null || $varsesion=''){
    echo 'Usted no tiene autorización para esta página';
    die();
}
$tel=$_POST['telefono'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultados.css">
    <title>Eliminación de un registro particular</title>
</head>
<body>
<?php
require'conexion.php';
            $telefono = $_POST['telefono'];
        
            $sql="SELECT * FROM contactos WHERE telefono='$telefono'";
            $resultado=mysqli_query($conexion, $sql);
          
            if(mysqli_num_rows($resultado)==0){
             
                echo " <h2> Sin resultados </h2>";
                echo "
                <br>
                <a href=\"modificar.php\" class=\"boton\">Regresar a la página de búsqueda</a>
                 <br>
                 <a href=\"index.php\" class=\"boton\">Regresar al inicio</a>
                </body> 
                </html>
                ";
                die();
            }
?>           


	<form action="borrar_reg.php" method="POST">
<table border=1 align="center">
        <tr class="encabezados">
            <td>Id Contacto</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Teléfono</td>
            <td>Método de contacto</td>
            <td>Comentario</td>
        </tr>
        <?php
            
            while($mostrar=mysqli_fetch_array($resultado)){
                echo"
                <tr align='center'>
                    <td><input type='text' name='id_con' value=".$mostrar['id_contacto']." readonly></td>
                    <td><input type='text' name='nombre' value=".$mostrar['nombre']."' readonly></td>
                    <td><input type='text' name='email' value=".$mostrar['email']." readonly></td>
                    <td><input type='text' name='tel' value=".$mostrar['telefono']." readonly></td>
                    <td><input type='text' name='met_con' value=".$mostrar['met_con']." readonly></td>
                    <td><input type='text' name='comentario' value=".$mostrar['coment']." readonly></td>
                </tr>";
            }
        ?>  
    </table>
    <button type="submit"></i> Exterminar</button>
   
</form>
<br>

    <a href="index.php" class="boton">Regresar al inicio</a>
</body>
</html>