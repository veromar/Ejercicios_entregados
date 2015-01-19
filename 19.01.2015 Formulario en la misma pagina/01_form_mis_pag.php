<!DOCTYPE html>
<html lang="es">

	<head>
		<title>title</title>
		<meta charset="UTF-8" />
	</head>

	<body>
	<!--Formulario procesado en la misma página
    Crear un formulario que se procese en la misma página
    Debe tener un campo para el nombre y dos tipo password
    Debemos recibir un mensaje si los password son diferentes
    Debemos prevenir con alguna función de php el error de variable vacía o no definida mediante isset() o empty()-->
	
		<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
		<label for="nombre">Nombre</label><br>
		<input type="text" name="nombre" maxlength="30" /><br>
		<label for="contrasena">Contraseña</label><br>
		<input type="password" name="contrasena" maxlength="30" /><br>
		<label for="contrasena1">Repita su contraseña</label><br>
		<input type="password" name="contrasena1" maxlength="30" /><br>
		<br><input type="submit" value="Submit" />
		</form>
		<?php
			
			if(isset($_POST["contrasena"]) && isset($_POST["contrasena1"])){
				$contrasena=$_POST["contrasena"];
				$contrasena1=$_POST["contrasena1"];
				if($contrasena!=$contrasena1){
					echo "Las contraseñas son distintas, escribelas de nuevo";
				}
				else{
					echo "Las contraseñas son iguales";
				}
			}
			else{
				echo "Faltan campos por rellenar";
			}
		?>
	</body>
</html>