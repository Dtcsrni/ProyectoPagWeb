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

    <link rel="stylesheet" href="css/resultados.css">
    
    <title>Consulta de registros</title>
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
                <a href=\"busqueda.php\" class=\"boton\">Regresar a la página de búsqueda</a>
                 <br>
                 <a href=\"index.html\" class=\"boton\">Regresar al inicio</a>
                </body> 
                </html>
                ";
                die();
            }
?>            
    <table>
        <tr>
            <td class="titulo">Id Contacto</td>
            <td class="titulo">Nombre</td>
            <td class="titulo">Email</td>
            <td class="titulo">Teléfono</td>
            <td class="titulo">Método de contacto</td>
            <td class="titulo">Comentario</td>
        </tr>
        <?php
           
                while($mostrar=mysqli_fetch_array($resultado)){
                    echo"
                    <tr>
                        <td>".$mostrar['id_contacto']."</td>
                        <td>".$mostrar['nombre']."</td>
                        <td>".$mostrar['email']."</td>
                        <td>".$mostrar['telefono']."</td>
                        <td>".$mostrar['met_con']."</td>
                        <td>".$mostrar['coment']."</td>
                    </tr>";
            }
        ?>
    </table>

    <footer>
<br>
    <a href="busqueda.php" class="boton"><-Regresar a la página de búsqueda</a>
    <br>
    <a href="index.php" class="boton"><-Regresar al inicio</a>
</footer> 
    
</body>
</html>