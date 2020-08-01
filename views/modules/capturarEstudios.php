<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de análisis</li>
		</ol>

		<div class="row">
			<div class="col-md-7 ml-2 mr-4"> 
			<div class="card ">
				<label>Cliente:</label>
                    <select class="form-control  ml-2 mr-2" name="producto">
                    <option>Selecione</option>
                    <?php
                    	$productos = new Controller();
                    	$productos -> ctlBuscaClientes();
                    ?> 
                </select>
                <div class="row col-md-12 "> 
	                <div class="col-md-6">
	                    <div class="form-group">
	                        <label for="cajaNombres">Nombre:</label>
	                        <input class="form-control" type="text" required placeholder="Nombre(s)" id="cajaNombres" name="cajaNombres">
	                    </div>
	                </div>
	                <div class="col-md-6">
	                    <div class="form-group">
	                        <label for="cajaApellidos">Apellidos:</label>
	                        <input class="form-control" type="text"  placeholder="Apellidos" id="cajaApellidos" name="cajaApellidos">
	                    </div>
	                </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cajaEmail">Correo electrónico:</label>
                                <input class="form-control" type="email" required
                                                placeholder="Correo electrónico" id="cajaEmail" name="cajaEmail">
                            </div>
                        </div>
                </div>
			</div>
			<div class="row">
				<div class="card col-md-12">
					<div class="row">
						<label>Estudio:</label>
                    	<select class="form-control ml-2 mr-2 mb-2" name="producto">
                    		<option>Selecione</option>
                    			<?php
                    			$productos = new Controller();
                    			$productos -> ctlBuscaEstudios();
                    			?> 
                		</select>
                		<button type="button" class="btn btn-primary">Capturar resultados</button>	
					</div>
					
				</div>
			</div>
			</div>
			<div class="card col-md-4">
				<div class="list-group">
  						<button type="button" class="list-group-item list-group-item-action active">
   								 Cras justo odio
  						</button>
  						<button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
  						<button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  						<button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  						<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
				</div>
			</div>
		</div>
		
	</div>
</div>