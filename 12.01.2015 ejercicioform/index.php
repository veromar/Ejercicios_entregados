<?php include("include/header.php"); ?>
		<!-- Hasta aqui va el header -->
		<div class="container">
		<form class="form-horizontal" method="POST" action="procesar.php">
			  <div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre">
				</div>
			  </div>
			  <div class="form-group">
				<label for="contrasena" class="col-sm-2 control-label">Contraseña</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" name="contrasena" placeholder="Escribe la contraseña">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Recuerdame
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button>Enviar</button>
				</div>
			  </div>
			</form>
		</div>
		<!-- Aqui va el footer -->
<?php include("include/footer.php"); ?>