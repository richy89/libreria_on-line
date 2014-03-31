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
					<div id="logo"><a href="../public"><img src="img/Logo2.png" height="130px"></a></div>
				</header>
				<div id="mensajesesion">
					<?php
						if(Session::has('mensaje_error')) 

						echo(Session::get('mensaje_error'));
					?>
	        	</div>
				<section class="contenidologin">
    				<img src="img/Imagen_Login.png" width=446px height=380px id="imagen_login"/>
                	<form action="login" method="post">
                        <div id="cuadrologin">
                            <table cellspacing="10" id="tablaLogin">
                            	<tr>
	                                <th colspan="2" align="center">
	                                	<h2>Log In</h2>
	                                </th>
                            	</tr>
                                <tr>
                                    <th align="left">Nombre</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nombre" required /></td>
                                </tr>
                                <tr>
                                    <th align="left">Contraseña</th>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" required /></td>
                                </tr>
                                <tr>
                            	</tr>
                                <tr>
                                    <td align="center"><input type="submit" class="botones_formulario" value=" Ingresar "/></td>
                                </tr>
                                <tr>
                            	</tr>
                                <tr>
                                	<td align="center"><a href="registrarse" title="Registrarse">Regístrate Ahora</a></td>
                                </tr>
                            </table>
                        </div>
               		</form>	
				</section>
				<footer class="contenidofooter">
					<h3>Copyright © 2014 - Todos los derechos reservados</h3>
			    </footer>   		
			</div>
		</center>
	</body>
</html>