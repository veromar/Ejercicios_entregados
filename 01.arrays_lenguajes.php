<!DOCTYPE html>
<html lang="es">
	<head>
		<title>title</title>
		<meta charset="UTF-8" />
	</head>

	<body>
		<!--* crea dos arrays
		* uno de lenguajes de servidor
		* Otro de lenguajes cliente
		* Concatenalos e imprímelos en html mediante una lista ordenada-->
		<ol>
			<?php
				//Esta primera parte son los dos arrays sin cocatenar
				$servidor=array("PHP","Python","Ruby","Perl");
				$cliente=array("Javascript","HTML","CSS","ActionScript","VBscript",);
				echo"<p>Lista de lenguajes de servidor: </p>";
					for($i = 0; $i < count($servidor); $i++) {
						echo "<li>$servidor[$i]</li>";
					echo "<br>";
					}
					echo "<p>Lista de lenguajes de cliente</p>";
					for($i = 0; $i < count($cliente); $i++) {
							echo "<li>$cliente[$i]</li>";
						echo "<br>";
					}
			?>
		</ol>

	</body>
</html>
