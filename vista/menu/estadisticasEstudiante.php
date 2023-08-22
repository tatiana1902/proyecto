<!DOCTYPE html>
<html lang="en">
<head>
<?php include('vista/header/header.php'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="modelo/assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <!-- Main Sidebar Container -->

  <?php include('vista/aside/aside.php'); ?>


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Menu</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
            
                <!-- Main row -->
                <form class="frmFiltrar" method="post">

                <div class="row">
                    <?php include('modelo/logica/cargarEstadEstudiante.php'); ?>
                </div>
                
                <!-- DONUT CHART -->
                
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            
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

<?php include('vista/footer/footer.php'); ?>
<script>

  
</script>
<?php

for ($i=0; $i < $contador; $i++) { 
  
  ?>
<script>

//-------------
   //- DONUT CHART -
   //-------------
   // Get context with jQuery - using jQuery's .get() method.
   var donutChartCanvas = $('#donutChart<?php echo $i; ?>').get(0).getContext('2d')
   var donutData        = {
     labels: [
         'Muy de acuerdo',
         'De acuerdo',
         'Indeciso',
         'En desacuerdo',
         'Muy en desacuerdo',
     ],
     datasets: [
       {
         data: <?php echo '['.$respuestas1[$i].','.$respuestas2[$i].','.$respuestas3[$i].','.$respuestas4[$i].','.$respuestas5[$i].']' ?>,
         backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
       }
     ]
   }
   var donutOptions     = {
     maintainAspectRatio : false,
     responsive : true,
   }
   //Create pie or douhnut chart
   // You can switch between pie and douhnut using the method below.
   new Chart(donutChartCanvas, {
     type: 'doughnut',
     data: donutData,
     options: donutOptions
   })

</script>

  <?php
}

?>


</body>
</html>
