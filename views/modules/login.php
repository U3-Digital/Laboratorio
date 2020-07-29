<div class="container">
	<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('views/img/home/7a.jpg') center center no-repeat; background-size: cover;"></div>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header"><h3>Acceso al sistema</h3></div>
      <div class="card-body">
        <form id="login-form" name="login-form" class="nobottommargin" method="post" onsubmit="return validarIngreso()">

        	<div class="col_full">
				<label for="login-form-username">Usuario:</label>
				<input required="true" type="text" id="usuarioIngreso" name="usuarioIngreso" placeholder="Ingrese su Usuario"  class="form-control not-dark" />
			</div>

			<div class="col_full">
				<label for="login-form-password">Password:</label>
				<input required type="password" id="passwordIngreso" name="passwordIngreso" placeholder="Ingrese su Contraseña" value="" class="form-control not-dark" required="true" />
			</div>

          </div>

          <div class="text-center">
          	    <button class="btn btn-primary nomargin" id="login-form-submit" name="login-form-submit" value="login">Entrar</button>

			</div>

			<?php

				$ingreso = new Ingreso();
				$ingreso -> ingresoController();

			?>


        </form>
        <div class="text-center">
        	<br>

<!--          <a href="index.php?action=lostPassword" class="fright">Olvid&oacute; su Password?</a>
-->          <br>
          <br>
        </div>
      </div>
    </div>
  </div>