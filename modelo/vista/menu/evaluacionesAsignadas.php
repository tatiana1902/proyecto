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
                            <h1>Mis Evaluaciones Asignadas</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Mis Evaluaciones</h3>
                                </div>
                            
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover example2">
                                        <thead>
                                        <tr>
                                            <th>Nombre Evaluación</th>
                                            <th>Asignado por</th>
                                            <th>Aplicar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php require('modelo/logica/cargarMisEvaluaciones.php'); ?>
                                        
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <?php include('vista/footer/footer.php'); ?>

</body>
</html>