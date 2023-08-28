<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('vista/header/header.php'); ?>
</head>
<body class="hold-transition login-page" style="background-image: url('vista/login/img/fondo.jpg');  background-size: cover;">
<div class="login-box">
  <div class="login-logo">
    <h1>Evaluación del pensamiento computacional</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg">Iniciar Sesión</h4>

      <form id="frmLogin" method="post">
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
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Acceder</button>
            <div id="resultado"></div>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <p>¿Aún no tienes cuenta? <a href="#" class="text-center clicmenu" id="registro">Registrate</a></p> 
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php include('vista/footer/footer.php'); ?>
</body>
</html>
