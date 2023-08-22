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
            <h1>Grupos</h1>
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
            <h3 class="card-title">Crear Grupo</h3>

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
          <form id="frmRegistrarGrupo" method="post">
            <div class="row">
              
                <div class="col-md-12">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre del grupo</label>
                      <input type="text" class="form-control" name="txtNombreGrupo" require placeholder="">
                    </div>
                    </div>
              </div>
            <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Registrar</button>
            <div id="resultado"></div>
          </div>
            <!-- /.row -->
          </div>
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
                <h3 class="card-title">Grupos registrados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover example2">
                  <thead>
                  <tr>
                    <th>Editar</th>
                    <th>Nombre</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php require('modelo/logica/cargarGrupos.php'); ?>
                  
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

<div class="modal fade" id="modal-modificarGrupo">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modificar Grupo <b><span id="nombreGrupo"> </span></b> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmModificarGrupo" method="post">
            <div class="row">
              
                <div class="col-md-12">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre Grupo</label>
                      <input type="text" class="form-control" name="txtNombreGrupo" require placeholder="">
                    </div>
                    </div>
                    <input type="text" name="idGrupo" id="idGrupo" style="display: none;">
              </div>

            <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Modificar</button>
            <div id="resultado"></div>
          </div>
            <!-- /.row -->
          </div>
          </form>
        </div>
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
