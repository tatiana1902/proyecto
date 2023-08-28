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
            <h1>Evaluaciones</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                          Test: Desarrollo y Validez Predictiva del Cuestionario de Disposición de Pensamiento Computacional 
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                      <div class="card-body">
                       
                      <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">PREGUNTAS</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">ASIGNACIONES</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">ASIGNAR EVALUACIÓN</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  <table class="table table-bordered table-hover example2">
                  <thead>
                  <tr>
                    <th>Pregunta</th>
                    <th>Categoría</th>
                    <th>Evaluacion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $evaluacion = 1;
                  include('modelo/logica/cargarPreguntas.php'); ?>
                  
                  </tfoot>
                </table>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                  <table class="table table-bordered table-hover example2">
                  <thead>
                  <tr>
                    <th>Grupo</th>
                    <th>Profesor</th>
                    <th>Fecha de asignacion</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  include('modelo/logica/cargarAsignaciones.php'); ?>
                  
                  </tfoot>
                </table>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    

                  <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            

            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form class="frmAsignarEvaluacion" method="post">
            <div class="row">
              
                
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
<input type="text" name="evaluacion" value="1" style="display: none;">
<div class="row">
            <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block btnIniciar">Asignar evaluación</button>
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



                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>

                      </div>
                    </div>
                  </div>
                  <div class="card card-danger">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                          Escala de Autoeficacia en Programación Informática (CPSES): Desarrollo, Validación y Confiabilidad
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                       
                       <div class="row">
           <div class="col-12">
             <!-- Custom Tabs -->
             <div class="card">
               <div class="card-header d-flex p-0">
                 
                 <ul class="nav nav-pills ml-auto p-2">
                   <li class="nav-item"><a class="nav-link active" href="#tab_4" data-toggle="tab">PREGUNTAS</a></li>
                   <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">ASIGNACIONES</a></li>
                   <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab">ASIGNAR EVALUACIÓN</a></li>
                   
                 </ul>
               </div><!-- /.card-header -->
               <div class="card-body">
                 <div class="tab-content">
                   <div class="tab-pane active" id="tab_4">
                   <table class="table table-bordered table-hover example2">
                   <thead>
                   <tr>
                     <th>Pregunta</th>
                     <th>Categoría</th>
                     <th>Evaluacion</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                   $evaluacion = 2;
                   include('modelo/logica/cargarPreguntas.php'); ?>
                   
                   </tfoot>
                 </table>
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="tab_5">
                   <table class="table table-bordered table-hover example2">
                   <thead>
                   <tr>
                      <th>Grupo</th>
                      <th>Profesor</th>
                      <th>Fecha de asignacion</th>
                      <th>Estado</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                   include('modelo/logica/cargarAsignaciones.php'); ?>
                   
                   </tfoot>
                 </table>
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="tab_6">
                     
 
                   <div class="container-fluid">
         <!-- SELECT2 EXAMPLE -->
         <div class="card card-default">
           <div class="card-header">
             
 
             
           </div>
           <!-- /.card-header -->
           <div class="card-body">
           <form class="frmAsignarEvaluacion" method="post">
             <div class="row">
               
                 
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
 <input type="text" name="evaluacion" value="2" style="display: none;">
 <div class="row">
             <div class="col-2">
             <button type="submit" class="btn btn-primary btn-block btnIniciar">Asignar evaluación</button>
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
 
 
 
                   </div>
                   <!-- /.tab-pane -->
                 </div>
                 <!-- /.tab-content -->
               </div><!-- /.card-body -->
             </div>
             <!-- ./card -->
           </div>
           <!-- /.col -->
         </div>
 
                       </div>
                     </div>
                    </div>
                  </div>


                  
                  <div class="card card-success">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                          Escala de percepción de autoeficacia para la habilidad de pensamiento computacional: estudio de validez y confiabilidad
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
           <div class="col-12">
             <!-- Custom Tabs -->
             <div class="card">
               <div class="card-header d-flex p-0">
                 
                 <ul class="nav nav-pills ml-auto p-2">
                   <li class="nav-item"><a class="nav-link active" href="#tab_7" data-toggle="tab">PREGUNTAS</a></li>
                   <li class="nav-item"><a class="nav-link" href="#tab_8" data-toggle="tab">ASIGNACIONES</a></li>
                   <li class="nav-item"><a class="nav-link" href="#tab_9" data-toggle="tab">ASIGNAR EVALUACIÓN</a></li>
                   
                 </ul>
               </div><!-- /.card-header -->
               <div class="card-body">
                 <div class="tab-content">
                   <div class="tab-pane active" id="tab_7">
                   <table class="table table-bordered table-hover example2">
                   <thead>
                   <tr>
                     <th>Pregunta</th>
                     <th>Categoría</th>
                     <th>Evaluacion</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                   $evaluacion = 3;
                   include('modelo/logica/cargarPreguntas.php'); ?>
                   
                   </tfoot>
                 </table>
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="tab_8">
                   <table class="table table-bordered table-hover example2">
                   <thead>
                   <tr>
                      <th>Grupo</th>
                      <th>Profesor</th>
                      <th>Fecha de asignacion</th>
                      <th>Estado</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                   include('modelo/logica/cargarAsignaciones.php'); ?>
                   
                   </tfoot>
                 </table>
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="tab_9">
                     
 
                   <div class="container-fluid">
         <!-- SELECT2 EXAMPLE -->
         <div class="card card-default">
           <div class="card-header">
             
 
             
           </div>
           <!-- /.card-header -->
           <div class="card-body">
           <form class="frmAsignarEvaluacion" method="post">
             <div class="row">
               
                 
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
 <input type="text" name="evaluacion" value="3" style="display: none;">
 <div class="row">
             <div class="col-2">
             <button type="submit" class="btn btn-primary btn-block btnIniciar">Asignar evaluación</button>
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
</div>
</div>
</div>
</div>
</div>
</div>

                      </div>
                    </div>
                  </div>



                  <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse4">
                          Escala: Pensamiento computacional Autopercepción de los estudiantes a partir de una escala
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                      <div class="row">
           <div class="col-12">
             <!-- Custom Tabs -->
             <div class="card">
               <div class="card-header d-flex p-0">
                 
                 <ul class="nav nav-pills ml-auto p-2">
                   <li class="nav-item"><a class="nav-link active" href="#tab_10" data-toggle="tab">PREGUNTAS</a></li>
                   <li class="nav-item"><a class="nav-link" href="#tab_11" data-toggle="tab">ASIGNACIONES</a></li>
                   <li class="nav-item"><a class="nav-link" href="#tab_12" data-toggle="tab">ASIGNAR EVALUACIÓN</a></li>
                   
                 </ul>
               </div><!-- /.card-header -->
               <div class="card-body">
                 <div class="tab-content">
                   <div class="tab-pane active" id="tab_10">
                   <table class="table table-bordered table-hover example2">
                   <thead>
                   <tr>
                     <th>Pregunta</th>
                     <th>Categoría</th>
                     <th>Evaluacion</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                   $evaluacion = 4;
                   include('modelo/logica/cargarPreguntas.php'); ?>
                   
                   </tfoot>
                 </table>
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="tab_11">
                   <table class="table table-bordered table-hover example2">
                   <thead>
                   <tr>
                      <th>Grupo</th>
                      <th>Profesor</th>
                      <th>Fecha de asignacion</th>
                      <th>Estado</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                   include('modelo/logica/cargarAsignaciones.php'); ?>
                   
                   </tfoot>
                 </table>
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane" id="tab_12">
                     
 
                   <div class="container-fluid">
         <!-- SELECT2 EXAMPLE -->
         <div class="card card-default">
           <div class="card-header">
             
 
             
           </div>
           <!-- /.card-header -->
           <div class="card-body">
           <form class="frmAsignarEvaluacion" method="post">
             <div class="row">
               
                 
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
 <input type="text" name="evaluacion" value="4" style="display: none;">
 <div class="row">
             <div class="col-2">
             <button type="submit" class="btn btn-primary btn-block btnIniciar">Asignar evaluación</button>
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
                    </div>
                  </div>


                </div>



                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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



      <div class="modal fade" id="modal-eliminarAsignacion">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Eliminar asignación del grupo <b><span id="nombreGrupoEliminarAsignacion"> </span></b> </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
          <form id="frmEliminarAsignacion" method="post">
          <div class="card-body">
                <div class="callout callout-danger">
                  <h5>Se eliminará la asignación para el grupo</h5>

                  <p>¿Esta seguro de realizar esta acción?</p>
                </div>
                <input type="text" name="idAsignacion" id="idAsignacion" style="display: none;">
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
