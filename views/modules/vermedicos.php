

<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de cliente</li>
        </ol>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12  overflow-auto">
                                <table id="tablaClientes" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                      <th style="width: 10px">#</th>
                                      <th>Nombre</th>
                                      <th>apellidos</th>
                                      <th>Email</th>
                                      <th style="width: 2.5em">Editar</th>
                                      <?php 
                                        if ($_SESSION["rol"] == 0) {
                                            echo '<th style="width: 2.5em;">Borrar</th>';
                                        }
										?>
                                    </tr>
                                    </thead>
                                     <tbody>
                                        <?php
                                            $registro = new Controller();
                                            $registro -> listaMedicos();
                                            $registro -> borrarMedico();

                                        ?>
                                    </tbody>

                                  </table>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
    </div>
</div>

<script>
  $(function () {
    $('#tablaClientes').DataTable()
    
  })
</script>