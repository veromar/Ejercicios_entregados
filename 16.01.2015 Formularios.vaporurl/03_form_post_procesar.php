<!DOCTYPE html>
<html lang="es">
	<head>
		<title>title</title>
		<meta charset="UTF-8" />

	</head>

	<body>
		<?php
		$nombre=$_POST["nombre"];
		$edad=$_POST["edad"];
		$sexo=$_POST["sexo"];
		$estudio=$_POST["estudios"];
		if (isset ($_POST["info"])){
			$info=$_POST["info"];
		}
		if (isset ($_POST["condiciones"])){
			$cond=$_POST["condiciones"];
		}
		
		
		if(isset ($_POST["condiciones"])){	
			if($sexo=="H"){
				echo "<h2>Hola querido amigo, $nombre</h2>";
			}
			else if ($sexo=="M"){
				echo "<h2>Hola querida amiga, $nombre</h2>";
			}
			else {
				echo "No has seleccionado tu sexo";
			}
			//Edad
			echo "<br>Su edad es $edad<br>";
			//Estudios
			echo "<br>Su nivel de estudios es: ";
			switch ($estudio){
				case "sin":
					echo "Sin estudios";
					break;
				case "prim":
					echo "Sus estudios son primarios";
					break;
				case "sec":
					echo "Sus estudios son secundarios";
					break;
				default:
					echo "Error al seleccionar sus estudios";
					break;
			}
			echo "<br>";
			//informacion de nuestros cursos
			if (isset ($_POST["info"])){
				if($info=="S"){
				echo "Ha seleccionado que le mantengamos informado sobre nuestros cursos disponibles. Actualmente tenemos dos cursos:<br>-Informatica básica (50horas).<br>-Creación de páginas web (50horas).";
				}
			}

			//Si no selecciona condiciones no debe procesar
		}
		else {
			echo "No ha aceptado las condiciones del servicio<br>";
			echo "<input type='button' onclick='history.back()' value='Volver'/>";
		}
		?>
	</body>
</html>
