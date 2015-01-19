<!DOCTYPE html>
<html lang="es">
	<head>
		<title>title</title>
		<meta charset="UTF-8" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
	<!-- 	Mostrar página en diferentes idiomas

    Crear una página de bienvenida que contenga cuatro enlaces con apariencia de botones (bootstrap):Español, Inglés, Francés, Alemán
    Estos enlaces apuntarán a una página con url denominada empresa.php que tenga además una variable denominada idioma(id) pero cada enlace con cuatro valores diferentes:español(es), francés(fr), inglés(en), alemán(gr)...
    Cada enlace apuntará, por tanto, a la página denominada empresa.php pero se diferenciarán en que la variable idioma (id)tomará en cada uno diferente valor.
    Elaborar un script que nos ofrezca los mismos textos pero en diferente idioma dependiendo enlace pulsado. Serán cuatro strings traducidos con el traductor de Google, por ejemplo.
    Debemos utilizar un switch
    Para finalizar deberemos implantar nuestra página en un repositorio personal de github Nota: mediante cookies podemos hacer que esta traducción se mantenga durante toda la web -->
	
		<div class="container">
			<h2>Seleccionar el idioma</h2>
			<a href='empresa.php?idioma=espanol' class="btn btn-primary btn-lg">Es</a>
			<a href='empresa.php?idioma=ingles' class="btn btn-primary btn-lg">En</a>
			<a href='empresa.php?idioma=frances' class="btn btn-primary btn-lg">Fr</a>
			<a href='empresa.php?idioma=aleman' class="btn btn-primary btn-lg">Ge</a>
		</div>
	</body>
</html>
