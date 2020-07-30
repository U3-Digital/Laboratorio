<div class="row h-100" style="margin: auto;">
    <div style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('views/img/home/7a.jpg') center center no-repeat; background-size: cover;">
    </div>
    <div class="card mx-auto my-auto" style="max-width: 25em;">
        <div class="card-header">
            <h3>Acceso al sistema</h3>
        </div>
            
        <div class="card-body">
            <form id="login-form" name="login-form" class="nobottommargin" method="POST" onsubmit="validarIngreso()">
                <div class="row">
                    <div class="col-md-12">
                         <label for="usuarioIngreso">Usuario: </label>
                        <input class="form-control" required type="email" id="usuarioIngreso" name="usuarioIngreso" placeholder="Ingrese su usuario" >
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label for="passwordIngreso">Contraseña: </label>
                        <input class="form-control" required type="password" id="passwordIngreso" name="passwordIngreso" placeholder="Ingrese su contraseña">
                    </div>    
                    <div class="text-center col-md-12 mt-3">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary nomargin">Aceptar</button>
                    </div>  
                </div>

                <?php
                    $ingreso = new Ingreso();
                    $ingreso -> ingresoController();
                ?>

            </form>
        </div>
    </div>
</div>
