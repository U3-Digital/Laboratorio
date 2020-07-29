<div class="container">
	<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('views/img/home/5.jpg') center center no-repeat; background-size: cover;"></div>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header"><h3>Recupere su contraseña</h3></div>
      <div class="card-body">
      	<form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">
			
			<div class="col_full">
				<label for="login-form-username">Email:</label>
				<input required="true" type="email" id="usuarioIngreso" name="usuarioIngreso" placeholder="Escriba aqui su correo electr&oacute;nico"  class="form-control not-dark" />
			</div>

			<?php							

				$ingreso = new Ingreso();
				$ingreso -> ingresoController();

			?>

			<div class="col_full nobottommargin">
				<br>
				<button class="btn btn-primary nomargin" id="login-form-submit" name="login-form-submit" value="login">Enviar</button>
				<a href="index.php" class="fright">Volver al Login</a>
				
		</form>
        
        
      </div>
    </div>
  </div>








<!--<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('views/img/home/5.jpg') center center no-repeat; background-size: cover;"></div>

				<div class="section nobg full-screen nopadding nomargin">
					<div class="container vertical-middle divcenter clearfix">

						<div class="row center">
							<a href="index.php"><img src="views/img/logo.png" alt="Canvas Logo"></a>
						</div>

						<div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
							<div class="panel-body" style="padding: 40px;">
								<form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">
									<h3>Recupere su contraseña</h3>

									<div class="col_full">
										<label for="login-form-username">Email:</label>
										<input required="true" type="text" id="usuarioIngreso" name="usuarioIngreso" placeholder="Escriba aqui si correo electr&oacute;nico"  class="form-control not-dark" />
									</div>

									<?php							

										$ingreso = new Ingreso();
										$ingreso -> ingresoController();
			
									?>

									<div class="col_full nobottommargin">
										<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Enviar</button>
										<a href="index.php" class="fright">Volver al Login</a>
										
								</form>

							</div>
						</div>

					</div>
				</div>

			</div>

		</section>-->