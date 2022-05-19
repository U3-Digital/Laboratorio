<?php 

?>

<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de análisis</li>
		</ol>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<form method="POST">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="cajaNombre">Nombre:</label>
										<input class="form-control" type="text" name="cajaNombre" id="cajaNombre" required placeholder="Nombre: ">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="cajaCosto">Costo:</label>
										<input class="form-control" type="text" name="cajaCosto" id="cajaCosto" required placeholder="Costo:">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<button name="submit" class="btn btn-primary" type="submit" value="submit">Aceptar</button>
								</div>
							</div>
						</div>

						<?php 

							$controller = new Controller();

							$controller -> ctlRegistrarAnalisis();
						?>

					</form>
				</div>
			</div>
		</div>


	</div>
</div>