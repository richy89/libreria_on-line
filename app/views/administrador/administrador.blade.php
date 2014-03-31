<!doctype html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="UTF-8">
		<title>Mundo Libros.RJL</title>
		<link href="img/libicon.ico" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
	</head>
	<body>
		<center>
			<div class="principal">	
				<header class="contenidoheader">
					<div id="logo"><img src="img/Logo2.png" height="130px"></div>
					<div class="logeo">
						<ul class="menulogin">
							<li id="nombreusuario">Bienvenido {{ Auth::user()->nombre; }}</li>
							<li><a href="logout">Log Out</a></li>
						</ul>
					</div>
				</header>
				<nav class="navegacion">
					<ul class="menu">
						<li><a href="libro">Libros</a></li>
		            </ul>
				</nav>
				<section class="contenidousuario">
					<article class="contenido1">
						<div id="Registrarse">
							<h2>Registrar Libro</h2>
                        	<form action="libro" method="post">
	                        	<table cellspacing="5">
	                        		<tr>
	                                    <th align="left">Codigo Libro</th>
	                                </tr>
	                                <tr>
	                                    <td><input type="text" name="id_libro" required /></td>
	                                </tr>
	                                <tr>
	                                    <th align="left">Titulo</th>
	                                </tr>
	                                <tr>
	                                    <td><input type="text" name="titulo" required /></td>
	                                </tr>
	                                <tr>
	                                    <th align="left">Año</th>
	                                </tr>
	                                <tr>
	                                    <td><input type="text" name="year" required /></td>
	                                </tr>
	                                <tr>
	                                	<td align="center"><input type="submit" class="botones_formulario" value=" Registrar "/></td>
	                                </tr>	                           
	                            </table>
                        	</form>
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