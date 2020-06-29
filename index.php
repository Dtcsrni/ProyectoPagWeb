<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,
    maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <title>Sitio Web</title>
</head>
<body>
    <div class="padre">
        <header class="header ">
            <div class="menu margen-interno">
                <div class="logo"> 
                <a href="index.html"> <img src="image/logo.png" alt="">
                   </a>
                </div>
                <nav class="nav">
                    <a href="#"> <img src="image/home.png" alt="Inicio" width="20%" style="vertical-align: middle;"><span class="off">Inicio</span> </a>
                    <a href="#"><img src="image/us.png" alt="Inicio" width="20%" style="vertical-align: middle;"> <span class="off">Nosotros</span></a>
                    <a href="#"><img src="image/service.png" alt="Inicio" width="20%" style="vertical-align: middle;"> <span class="off">Servicios</span></a>
                    <a href="#"><img src="image/news.png" alt="Inicio" width="20%" style="vertical-align: middle;"> <span class="off">Noticias</span></a>
                    <a href="contacto.html"><img src="image/contact.png" alt="Inicio" width="20%" style="vertical-align: middle;"> <span class="off">Contacto</span></a>
                    <?php
                    session_start();
                    
                    if(isset($_SESSION['usuario'])){
                        $usuario = $_SESSION['usuario'];
                        echo "<a href=\"panel.php\"><img src=\"image/contact.png\" alt=\"Inicio\" width=\"20%\" style=\"vertical-align: middle; text-decoration:\"> <span class=\"off\">Panel</span></a>"; 
                        echo "<p  style=\"text-align: center; color: white\">Bienvenido $usuario</p>";
                    }
                    else{
                        echo "<a href=\"acceso.php\"><img src=\"image/contact.png\" alt=\"Inicio\" width=\"20%\" style=\"vertical-align: middle;\"> <span class=\"off\">Acceso</span></a>"; 
                    }

                    ?>
                </nav>
                <div class="social">
                   <div><a href="#"><img src="image/facebook.png" alt="Facebook" ></a></div>
                   <div><a href="#"><img src="image/twitter.png" alt="Twitter"  ></a></div>

                </div>
            </div>
            <div class="texto-principal margen-interno">
                <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate nobis facere ab, cumque illum corporis laborum distinctio, excepturi aperiam nemo autem nulla laboriosam nostrum alias praesentium animi saepe veritatis non?</h1>
            </div>
        </header>
        <section class="section margen-interno">
            <div class="articulos">
                <article class="article">
                <img src="image/img_peq.jpeg" alt="articulo">
                <h3>08 de junio del 2020</h3>
                <h2>Título del artículo</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil autem ducimus quaerat quam porro recusandae distinctio consequatur, quisquam rem? Aliquam, illum nihil a in cumque placeat maiores unde reiciendis magni.</p>
                <a href="#">Leer más</a>
                </article>
                <article class="article">
                    <img src="image/img_peq.jpeg" alt="articulo">
                    <h3>08 de junio del 2020</h3>
                    <h2>Título del artículo</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil autem ducimus quaerat quam porro recusandae distinctio consequatur, quisquam rem? Aliquam, illum nihil a in cumque placeat maiores unde reiciendis magni.</p>
                    <a href="#">Leer más</a>
                     </article>
                <article class="article">
                        <img src="image/img_peq.jpeg" alt="articulo">
                        <h3>08 de junio del 2020</h3>
                        <h2>Título del artículo</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil autem ducimus quaerat quam porro recusandae distinctio consequatur, quisquam rem? Aliquam, illum nihil a in cumque placeat maiores unde reiciendis magni.</p>
                        <a href="#">Leer más</a>
                    </article>
                <article class="article">
                            <img src="image/img_peq.jpeg" alt="articulo">
                            <h3>08 de junio del 2020</h3>
                            <h2>Título del artículo</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil autem ducimus quaerat quam porro recusandae distinctio consequatur, quisquam rem? Aliquam, illum nihil a in cumque placeat maiores unde reiciendis magni.</p>
                            <a href="#">Leer más</a>
                    </article>

                <nav class="navegacion">
                    <a href="#">Inicio</a>
                    <a href="#">Página 1</a>
                    <a href="#">Página 2</a>
                    <a href="#">Página 3</a>
                    <a href="#">Página 4</a>
                    <a href="#">Final</a>
                </nav>
            </div>
            <aside class="aside">
                <div class="publicidad">
                    <h4>Aside</h4>
                    <img src="image/img_peq.jpeg" alt="">
                    <h4>Aside</h4>
                    <img src="image/img_peq.jpeg" alt="">
                </div>
                <div class="publicidad"></div>
            </aside>
        </section>
        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#">Creado por Erick Vega</a>
            </nav>
        </footer>
    </div>
</body>
</html>