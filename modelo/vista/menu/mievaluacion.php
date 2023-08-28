<!DOCTYPE html>
<html lang="en">
<head>
<?php include('vista/header/header.php'); ?>
<?php include('modelo/logica/datosEvaluacion.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Realizar Evaluación</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detalles de la evaluación</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <form class="frmRespuestas" method="post"> 
              <div class="row" style="height: 780px;
    overflow: auto;">
                <div class="col-12">
                  <h4>Preguntas</h4>
                   
                  <?php include('modelo/logica/aplicarPreguntas.php'); ?>

                    
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-clock"></i> <?php echo $nombre_evaluacion; ?></h3>
              <p class="text-muted">Usted esta realiazando la evaluación <?php  echo $nombre_evaluacion; ?> tenga en cuenta lo siguiente:</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Tiempo
                  <b class="d-block">Sin tiempo</b>
                </p>
                <p class="text-sm">Intentos
                  <b class="d-block">1/1</b>
                </p>
                <p class="text-sm">Grupo
                  <b class="d-block"><?php echo $nombre_grupo; ?></b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Como resolver la evaluación</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="fas fa-check"></i> Lea las instrucciones</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="fas fa-check"></i> Lea atentamente las preguntas</a>
                </li>

                <li>
                  <a href="" class="btn-link text-secondary"><i class="fas fa-check"></i> Seleccione la respuesta que usted considere correcta</a>
                </li>

                <li>
                  <a href="" class="btn-link text-secondary"><i class="fas fa-check"></i> Cuando este seguro de responder todas las preguntas, presione le boton "Finalizar evaluación"</a>
                </li>
                
              </ul>
              <div class="text-center mt-5 mb-3">
                <div class="btnFinalizarEvaluacion"><button type="submit" class="btn btn-warning btn-block ">Finalizar evaluación</button></div>
                <div class="btnFinalizarEvaluacion2" style="display: none;"><button type="button" class="btn btn-info btn-block ">Guardando respuestas...</button></div>
                
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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

<div class="modal fade" id="modal-registrarProfesor">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Modificar Profesor <b><span id="nombreProfesor"> </span></b> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmModificarProfesor" method="post">
            <div class="row">
              
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre Profesor (Usuario)</label>
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

      <div class="modal fade" id="modal-eliminarProfesor">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Eliminar Profesor <b><span id="nombreProfesorEliminar"> </span></b> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmEliminarProfesor" method="post">
          <div class="card-body">
                <div class="callout callout-danger">
                  <h5>Se eliminará el profesor</h5>

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
