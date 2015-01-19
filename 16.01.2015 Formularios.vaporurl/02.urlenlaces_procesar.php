<!DOCTYPE html>
<html lang="es">
	<head>
		<title>title</title>
		<meta charset="UTF-8" />

	</head>

	<body>
		<?php
		$idioma=$_GET["idioma"];
$lang_es=<<<ESPANOL
		<h1>Bienvenido a nuestra página</h1>
		<p> Ha entrado en la pagina en su versión en Español</p>
		<p> ¿Que desea hacer ahora?</p>
ESPANOL;
$lang_en=<<<INGLES
		<h1>Welcome to our web</h1>
		<p> You're in the english version of our site</p>
		<p> ¿What you wanna do now?</p>
INGLES;
$lang_fr=<<<FRANCES
		<h1>Bienvenue sur notre site</h1>
		<p> Il est entré dans le site dans la version en français</p>
		<p> Que feriez-vous maintenant?</p>
FRANCES;
$lang_gr=<<<ALEMAN
		<h1>Willkommen auf unserer Website</h1>
		<p> Es wurde die Website in der Version auf deutsche eingegeben</p>
		<p> Was würden Sie jetzt tun?</p>
ALEMAN;

	switch ($idioma){
		case 'espanol':
			echo $lang_es;
			break;
		case 'ingles':
			echo $lang_en;
			break;
		case 'frances':
			echo $lang_fr;
			break;
		case 'aleman':
			echo $lang_gr;
			break;
		default:
			echo "Error.";
	}
		?>
	</body>
</html>
