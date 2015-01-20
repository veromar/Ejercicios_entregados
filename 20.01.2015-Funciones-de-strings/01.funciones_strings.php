<!DOCTYPE html>
<html lang="es">
	<head>
		<title>title</title>
		<meta charset="UTF-8" />

	</head>

	<body>
	<!--Usando funciones PHP para strings

	Teniendo en cuenta las siguientes funciones para strings y arrays en PHP Ejecutar en un archivo php órdenes que realicen las tareas indicadas:

	Dado el siguiente string:

	"PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre."

    Realizar las siguientes tareas:
    Adivinar el número de palabras que tiene.
    Si es superior a 100 caracteres crear un substring que lo corte y añadir unos puntos suspensivos
    Invertir
    Sustituir la palabra 'PHP' por la palabra 'Ruby' y
    poner en mayúsculas la palabra libre
    Limitar el párrafo a cuatro palabras-->
	
		<p>
			Texto base: PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.
		</p>
	
		<?php
			$texto="PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.";
			$num_pal=str_word_count($texto);
			echo "El numero de palabras del texto es: $num_pal.<hr>";
		
			//Calculamos los caracteres
			
			$num_car=strlen($texto);
			echo "El numero de caracteres de la cadena es: $num_car<hr>";
			
			//Creamos un substring para los 100 primeros caracteres
			$cad_corta=substr($texto,0,100);
			echo "Cadena cortada: $cad_corta...";
			echo "<hr>";
			
			//invertimos la cadena
			$invertir=strrev($texto);
			echo "Frase invertida: $invertir";
			echo "<hr>";
			
			//Sustituir la palabra PHP por ruby
			$sustituida=str_replace('PHP','Ruby',$texto);
			echo "Sustituyendo PHP: $sustituida";
			echo "<hr>";
			
			//Poner en mayusculas la palabra libre
			$sustituir=str_replace('libre','LIBRE',$texto);
			echo "Sustituimos libre por LIBRE: $sustituir";
			echo "<hr>";
			
			//Limitar el parrafo a cuatro palabras
			
			$array_texto=explode(" ",$texto);
			$array_corte=array_slice($array_texto,0,4);
			$array_union=implode($array_corte," ");
			echo "Parrafo limitado a 4 palabras: $array_union";
			
		?>
	</body>
</html>
