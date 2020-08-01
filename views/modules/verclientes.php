

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
                            <div class="col-md-12">
                                <table id="tablaClientes" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                      <th style="width: 10px">#</th>
                                      <th>Nombre</th>
                                      <th>apellidos</th>
                                      <th>Email</th>
                                      <th style="width: 40px"></th>
                                      <th style="width: 40px"></th>
                                    </tr>
                                    </thead>
                                     <tbody>
                                        <?php
                                            $registro = new Controller();
                                            $registro -> listaClientes();
                                            $registro -> borrarCliente();

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