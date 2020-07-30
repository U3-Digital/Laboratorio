<?php

session_start();

if(!$_SESSION["validar"]){

  header("location:index.php");

  exit();

}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">U3 Digital</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="charts.html">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Charts</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tables</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.html">Navbar</a>
                    </li>
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Example Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                    <li>
                        <a href="register.html">Registration Page</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password Page</a>
                    </li>
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Menu Levels</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third
                            Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Link</span>
                </a>
            </li>

        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link">
                    <span class="nav-link-text"><?php echo $_SESSION["nombre"]?></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout
                </a>
            </li>
        </ul>
    </div>
</nav>



<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Administrador</a>
            </li>
            <li class="breadcrumb-item">Registro de usuario</li>
        </ol>


        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <form method="POST" name="forma">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaNombres">Nombre:</label>
                                                <input class="form-control" type="text" required placeholder="Nombre(s)" id="cajaNombres" name="cajaNombres">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaApellidos">Apellidos:</label>
                                                <input class="form-control" type="text" required placeholder="Apellidos" id="cajaApellidos" name="cajaApellidos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaEmail">Correo electrónico:</label>
                                                <input class="form-control" type="email" required
                                                placeholder="Correo electrónico" id="cajaEmail" name="cajaEmail">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cajaPassword">Contraseña:</label>
                                                <input class="form-control" type="password" required
                                                placeholder="Contraseña" id="cajaPassword" name="cajaPassword">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-profile" src="views/img/foto_perfil_placeholder.png" alt="Seleccionar foto de perfil">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="selectRol">Rol:</label>
                                        <select required class="form-control" id="selectRol" name="selectRol">
                                            <option selected>Rol</option>
                                            <option value="admin">Administrador</option>
                                            <option value="usuario">Usuario</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="selectActivo">Activo:</label>
                                        <select required class="form-control" id="selectActivo" name="selectActivo">
                                            <option selected>Activo</option>
                                            <option value="admin">Sí</option>
                                            <option value="usuario">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
    <!-- 
                                <div class="col-md-4">
                                </div> -->

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="min-width: 10em;">Aceptar</button>
                                </div>
                            </div>
                        </div>     

                        <?php 

                        // $controller = new MvcController();
                        
                        // print_r($_POST);

                        ?>

                    </form>

                </div>

            </div>
        </div>

    </div>
</div>

<!-- 
<div class="clear"></div>   Limpiamos el renglon 

<section id="content">
  <div class="content-wrap">
      <div class="container clearfix">
      <div class="clear"></div>  Limpiamos el renglon 

<div class="col_two_third col_last">
 <form name="alta" id="alta" method="post" enctype="multipart/form-data">
  
    <div class="col_full">
      <label>Nombre Completo: <span class="required">*</span></label>
      <input name="nombre" type="text" required class="form-control" id="nombre" placeholder="Nombre">
    </div>
  
    <div class="col_half">
      <label>Usuario: <span class="required">*</span></label>
      <input name="usuario" type="text" required class="form-control" id="usuario" placeholder="Usuario">
    </div>

     <div class="col_half col_last">
      <label>Password: <span class="required">*</span></label>
      <input name="password" type="text" required class="form-control" id="password" placeholder="Password">
    </div>
      
    <div class="clear"></div>

    <div class=" col_one_third">
      <label>email: <span class="required">*</span></label>
      <input name="email" type="text" required class="form-control" id="email" placeholder="email">
    </div>
        
     
    <div class=" col_one_third">
      <label>Area: <span class="required">*</span></label>
      <select name="sistema" required class="form-control" id="sistema">
          <option value="">SELECCIONE...</option>
          <option value= 'A'>Almacen</option>
          <option value= 'B'>Becas</option>
          <option value= 'E'>Direcci&oacute;n</option> 
          <option value= 'O'>Orientaci&eacute;n Educativa</option>          
          <option value= 'E'>Servicios Escolares</option>

      </select>
    </div>
    
    <div class=" col_one_third col_last">
      <label>Roll Desempe&ntilde;ado: <span class="required">*</span></label>
      <select name="rol" required class="form-control" id="rol">
      	<option value="">SELECCIONE...</option>
      	<option value= '1'>Administrador</option>
      	<option value= '2'>Jefe Departamento</option>
      	<option value= '3'>Empleado</option>
      </select>
    </div>

    <input type="hidden" name="activo" value="S">

    <div class="col_full nobottommargin">
		<button type="submit" class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="Grabar">Grabar</button>
	</div>
   
  
</form> -->
<!-- .form-box -->
<?php

// $registro = new MvcController();
// $registro -> registroUsuarioController();

// if(isset($_GET["action"])){

// 	if($_GET["action"] == "ok"){

// 		echo "Registro Exitoso";
	
// 	}

// }
?>
</div>
<!--col_full -->


<!-- 
</div>
</div>
</section> 