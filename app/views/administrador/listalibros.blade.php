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
							<li id="nombreusuario">Bienvenido {{ Auth::user()->nombre; }} </li>
							<li><a href="logout">Log Out</a></li>
						</ul>
					</div>
				</header>
				<section class="contenidousuario">
					<article class="contenido1">
						<h1>Libros</h1>
						<table cellspacing="15">
							<tr>
								<th align="center">Codigo de Libro</th>
								<th align="center">Titulo</th>
								<th align="center">Año</th>
							</tr>
							@foreach($libro as $item)
							<tr>
								<td align="center">{{ $item->id }}</td>
								<td align="center">{{ $item->titulo }}</td>
								<td align="center">{{ $item->year }}</td>
								<td>{{ link_to('libro/'.$item->id, 'Ver') }}</td>
								<td>{{ link_to('libro/'.$item->id.'/edit', 'Editar') }}</td>
								<td>
									{{ Form::open(array('url' => 'libro/'.$item->id)) }}
									    {{ Form::hidden("_method", "DELETE") }}
									    {{ Form::submit("Eliminar") }}
									 {{ Form::close() }}
								</td>
							</tr>
							@endforeach					
						</table>
						<a href="administrador">Volver</a>
					</article>
				</section>
				<footer class="contenidofooter">
					<h3>Copyright © 2014 - Todos los derechos reservados</h3>
			    </footer>   		
			</div>
		</center>
	</body>
</html>

<!--<img src="img/Eliminar.png" width=25px heigth=25px title="Eliminar" />-->
