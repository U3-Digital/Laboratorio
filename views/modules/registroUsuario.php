<!--============================   Registro de Usuarios ======================================-->
<?php

session_start();

if(!$_SESSION["validar"]){

  header("location:index.php");

  exit();

}

include "views/modules/encabezado.php";

?>


<!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-mini">

      <div class="container clearfix">
        <h1>Registro de Usuarios</h1>

      </div>

    </section>
<!-- #page-title end -->



<div class="clear"></div> <!--  Limpiamos el renglon -->

<section id="content">
  <div class="content-wrap">
      <div class="container clearfix">
      <div class="clear"></div> <!--  Limpiamos el renglon -->

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
   
  
</form><!-- .form-box -->

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}
?>
</div> <!--col_full -->



</div>
</div>
</section>