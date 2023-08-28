<!DOCTYPE html>
<html lang="en">
<head>
<?php include('vista/header/header.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <?php include('vista/aside/aside.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Estudiantes</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Crear Estudiante</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmRegistrarEstudiante" method="post">
            <div class="row">
              
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre Estudiante (Usuario)</label>
                      <input type="text" class="form-control" name="txtUsuario" require placeholder="">
                    </div>
                    </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contraseña</label>
                      <input type="password" class="form-control" require name="txtPass" placeholder="">
                    </div>
                    </div>
              </div>

              <div class="col-md-6">
              <div class="form-group">
                  <label>Grupo</label>
                  <select class="form-control select2" name="cmbGrupo" style="width: 100%;">
                  <option value="">Selecciona</option>
                  <?php require('modelo/logica/cargarGruposOption.php'); ?>
                    
                  </select>
                </div>
</div>
</div>
<div class="row">
            <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Registrar</button>
            <div id="resultado"></div>
          </div>
</div>
            <!-- /.row -->
          
          </form>
        </div>
        <!-- /.card -->

      </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Estudiantes registrados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover example2">
                  <thead>
                  <tr>
                    <th>Editar</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <span id="datosTabla"> <?php require('modelo/logica/cargarEstudiantes.php'); ?> </span>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-registrarEstudiante">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modificar Estudiante <b><span id="nombreEstudiante"> </span></b> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmModificarEstudiante" method="post">
            <div class="row">
              
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre Estudiante (Usuario)</label>
                      <input type="text" class="form-control" name="txtUsuario" require placeholder="">
                    </div>
                    </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contraseña</label>
                      <input type="password" class="form-control" require name="txtPass" placeholder="">
                    </div>
                    </div>
                    <input type="text" name="idUsuario" id="idUsuario" style="display: none;">
              </div>

              <div class="col-md-6">
              <div class="form-group">
                  <label>Grupo</label>
                  <select class="form-control select2" name="cmbGrupo" style="width: 100%;">
                  <option value="">Selecciona</option>
                  <?php require('modelo/logica/cargarGruposOption.php'); ?>
                    
                  </select>
                </div>
                </div>
</div>
<div class="row">
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Modificar</button>
            <div id="resultado"></div>
          </div>
          </div>
          
          </form>
        
        <!-- /.card -->
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
</div>

      <div class="modal fade" id="modal-eliminarEstudiante">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Eliminar Estudiante <b><span id="nombreEstudianteEliminar"> </span></b> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmEliminarEstudiante" method="post">
          <div class="card-body">
                <div class="callout callout-danger">
                  <h5>Se eliminará el estudiante</h5>

                  <p>¿Esta seguro de realizar esta acción?</p>
                </div>
                <input type="text" name="idUsuario" id="idUsuarioEliminar" style="display: none;">
              </div>
          <div class="row">
          <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Eliminar</button>
            <div id="resultado"></div>
          </div>
          </div>
          
          </form>
        
        <!-- /.card -->
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


      <?php include('vista/footer/footer.php'); ?>

</body>
</html>
