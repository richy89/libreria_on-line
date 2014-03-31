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
				<section class="contenidoregistrarse">
					<div id="Registrarse">
					<h2 class="Titulo_Formulario">Registro</h2>
                        <form action="registrarse" method="post">
                        	<table cellspacing="5">
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
                                    <th align="left">Tipo de Usuario</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="tipousuario" required /></td>
                                </tr>
                                <tr>
                                	<td align="center"><input type="submit" class="botones_formulario" value=" Registrarse "/></td>
                                </tr>	                           
                            </table>
                        </form>
                    </div>
				</section>
				<footer class="contenidofooter">
					<h3>Copyright © 2014 - Todos los derechos reservados</h3>
			    </footer>   		
			</div>
		</center>
	</body>
</html>