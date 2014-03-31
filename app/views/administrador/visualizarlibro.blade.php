<!doctype html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="UTF-8">
        <title>Mundo Libros.RJL</title>
        <link href="img/libicon.ico" rel="icon" type="image/x-icon" />
        {{ HTML::style('css/estilo.css'); }}    </head>
    <body>
        <center>
            <div class="principal"> 
                <header class="contenidoheader">
                    <div id="logo"><img src="img/Logo2.png" height="130px"></div>
                    <div class="logeo">
                        <ul class="menulogin">
                            <li id="nombreusuario">Bienvenido {{ Auth::user()->nombre; }} </li>
                            <li><a href="logout">Log Out</a></li>
                        </ul>
                    </div>
                </header>
                <section class="contenidousuario">
                    <article class="contenido1">
                        <div id="Registrarse">
                            <h2>Datos de Libro</h2>
                            <ul>
                                <li> Código de Libro: {{ $libro->id }} </li>
                                <li> Titulo: {{ $libro->titulo }} </li>
                                <li> Año: {{ $libro->year }} </li>
                            </ul>
                            <p> {{ link_to('libro', 'Volver') }} </p>                         
                        </div>
                    </article>
                </section>
                <footer class="contenidofooter">
                    <h3>Copyright © 2014 - Todos los derechos reservados</h3>
                </footer>           
            </div>
        </center>
    </body>
</html>