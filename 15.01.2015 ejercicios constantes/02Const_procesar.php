<!DOCTYPE html>
<html lang="es">
	<head>
		<title>title</title>
		<meta charset="UTF-8" />
	</head>

	<body>
		<?php
		const PI=3.1416;
		$num=$_GET["valor"];
		$perimetro=2*PI*$num;
		$area=PI*($num*$num);
		$resultado="El área del circulo es igual a: ".$area." y su perimetro es: ".$perimetro.".";
		echo $resultado;
		?>
	</body>
</html>
