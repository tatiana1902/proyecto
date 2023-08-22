<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('vista/header/header.php'); ?>
</head>
<body class="hold-transition login-page" style="background-image: url('vista/login/img/fondo.jpg');  background-size: cover;">
<div class="login-box">
  <div class="login-logo">
    <h1>Evaluacion del pensamiento computacional</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg">Bienvenido Registrate!</h4>

      <form id="frmRegistro" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="txtUsuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="txtPass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group mb-3">
            <select class="form-control" name="cmbGrupo">
              <option value="" selected disabled>Selecciona tu grupo</option>
                <?php require('modelo/logica/cargarGruposOption.php'); ?>
            </select>
        </div>
        
       
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Registrar</button>
            <div id="resultado"></div>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <p>¿Ya tienes cuenta? <a href="#" class="text-center clicmenu" id="login">Inicia Sesion</a></p>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php include('vista/footer/footer.php'); ?>
</body>
</html>
