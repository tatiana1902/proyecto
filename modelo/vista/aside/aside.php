<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php

          if($_SESSION['id_tipo'] == '1'){
          ?>
          <img src="modelo/assets/dist/img/teacher.png" class="img-circle elevation-2" alt="User Image">
          <?php
          }else{
          ?>
           <img src="modelo/assets/dist/img/student.png" class="img-circle elevation-2" alt="User Image">
          <?php
          }
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block clicmenu <?php echo ($_SESSION['ubica'] == 'miperfil') ?  'active' :  '' ; ?>" id="miperfil"><?php echo $_SESSION['usuario']; ?></a>
        </div>
      </div>

 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '1') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'menu') ?  'active' :  '' ; ?>" id="menu">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menú
              </p>
            </a>
          </li>

          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '2') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'menuEstudiante') ?  'active' :  '' ; ?>" id="menuEstudiante">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menú
              </p>
            </a>
          </li>

          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '1') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'estudiantes') ?  'active' :  '' ; ?>" id="estudiantes">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Estudiantes
              </p>
            </a>
          </li>

          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '1') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'grupos') ?  'active' :  '' ; ?>" id="grupos">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Grupos
              </p>
            </a>
          </li>

          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '1') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'profesores') ?  'active' :  '' ; ?>" id="profesores">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Profesores
              </p>
            </a>
          </li>

          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '1') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'evaluaciones') ?  'active' :  '' ; ?>" id="evaluaciones">
              <i class="nav-icon fa fa-copy"></i>
              <p>
                Evaluaciones
              </p>
            </a>
          </li>

          <li class="nav-item" style="<?php echo ($_SESSION['id_tipo'] == '2') ?  'display: inline;' :  'display: none;' ; ?>">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'evaluacionesAsignadas') ?  'active' :  '' ; ?>" id="evaluacionesAsignadas">
              <i class="nav-icon fa fa-copy"></i>
              <p>
                Mis Evaluaciones
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'aplicar') ?  'active' :  '' ; ?>" id="aplicar">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Mis Resultados
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link clicmenu <?php echo ($_SESSION['ubica'] == 'index') ?  'active' :  '' ; ?>" id="index">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Cerrar sesión
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>