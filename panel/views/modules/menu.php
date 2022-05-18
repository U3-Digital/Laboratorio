<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="inicio.php?action=home">OGA Laboratorio</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Estudios">
          <a class="nav-link collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fas fa-flask" aria-hidden="true"></i>
            <span class="nav-link-text">Estudios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="inicio.php?action=capturarEstudios">Capturar estudios</a>
            </li>
            <li>
              <a href="inicio.php?action=verEstudios">Ver estudios</a>
            </li>
            <li>
              <a href="inicio.php?action=verAnalisis">Ver catálogo de estudios</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">
          <a class="nav-link collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fas fa-address-book" aria-hidden="true"></i>
            <span class="nav-link-text">Clientes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="inicio.php?action=verclientes">Ver clientes</a>
            </li>
            <li>
              <a href="inicio.php?action=registrocliente">Registrar cliente</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Medicos">
          <a class="nav-link collapsed" data-toggle="collapse" href="#collapseMedico" data-parent="#exampleAccordion">
            <i class="fas fa-hospital-user"></i>
            <span class="nav-link-text">Medicos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMedico">
            <li>
              <a href="inicio.php?action=vermedicos">Ver Medicos</a>
            </li>
            <li>
              <a href="inicio.php?action=registromedico">Registrar medico</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuarios">
          <a class="nav-link collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="nav-link-text">Usuarios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="inicio.php?action=verUsuarios">Ver usuarios</a>
            </li>
            <li>
              <a href="inicio.php?action=registroUsuario">Registrar usuario</a>
            </li>
            
              </ul>
            </li>
          </ul>
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

        <li class="nav-item" >
          <a class="nav-link">
            <i ></i><span class="nav-link-text">Hola: <?php echo $_SESSION["nombre"] ; ?></span>
          </a>
        </li>


        <li class="nav-item">
          <a href="inicio.php?action=salir" class="nav-link">
            <i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- end navigation -->