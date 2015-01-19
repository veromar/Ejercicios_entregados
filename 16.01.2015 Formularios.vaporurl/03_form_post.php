<!DOCTYPE html>
<html lang="es">
	<!--
    Crear un formulario en html
        con un campo de texto que solicite el nombre del usuario
        un campo de tipo fecha que solicite su fecha de nacimiento
        Un campo tipo select que indique su sexo.
        un campo tipo radio 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios
        Un campo tipo checkbox ,ckecked por default, que diga que quiero recibir información periódicamente
        Un campo tipo checkbox que diga que acepto las condiciones del servicio
    Procesar el formulario mediante post y el la página procesada
        saludar al usuario (implicando su sexo y su nombre), Ejemplo Hola, querido amig(o/a), nombre
        decirle su edad. Ayudaros de la función date();
        decirle un mensaje personalizado según los estudios
        Si desea recibir información le informamos de los cursos que tenemos-->
	<head>
		<title>title</title>
		<meta charset="UTF-8" />
	</head>

	<body>
		<form method="POST" action="03_form_post_procesar.php">
		<label for="nombre">Nombre</label><br>
		<input type="text" name="nombre" maxlength="30" /><br>
		<label for="edad">Indique su edad</label><br>
		<input type="number" name="edad" /><br>
		<label for="sexo">Sexo:</label><br>
		<select name="sexo" required="required"><br>
		  <option value="" checked="checked"></option>
		  <option value="H">Hombre</option>
		  <option value="M">Mujer</option>
		</select><br><br><hr>
		<label for="estudios">Seleccione sus estudios</label><br>
		<input type="radio" name="estudios"value="sin"/>No tiene estudios
		<input type="radio" name="estudios"value="prim"/> Estudios primarios
		<input type="radio" name="estudios"value="sec"/> Estudios secundarios
		<br><br>
		<input type="checkbox" name="info" value="S" checked="checked"/>Recibir información periódicamente
		<br><input type="checkbox" name="condiciones" value="S" checked="checked"/>Acepto las condiciones del servicio
		<br><br><input type="submit" value="Submit" />
		</form>
	</body>
</html>