			<?php 
			$nombre=$_POST['nombre'];
			$password=$_POST['contrasena'];
			if ($nombre=='vero' && $password=='unitel'){
			//echo "$nombre eres un crack";
			header('Location:usuario1.php');
			exit;
			}
			else if ($nombre=='angela' && $password=='angela'){
			header('Location:usuario2.php');
			}
			else if ($nombre=='rosa' && $password=='rosa'){
			header('Location:usuario3.php');
			}
			else if ($nombre=='javi' && $password=='javi'){
			header('Location:usuario4.php');
			}
			else{
			header('Location:usuario_invitado.php');
			}
			?>