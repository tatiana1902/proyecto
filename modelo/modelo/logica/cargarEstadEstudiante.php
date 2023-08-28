<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';
$usuario = $_SESSION['usuario'];

  $query = "SELECT COUNT(res.respuesta) as countrespuesta, us.usuario FROM respuestas as res 
  INNER JOIN asignacion as asi ON res.id_asignacion = asi.id_asignacion 
  INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asi.id_evaluacion 
  INNER JOIN usuarios as us ON us.id_usuario = res.id_usuario WHERE";

  $querytabla = "SELECT cat.nombre_categoria, pre.pregunta, res.respuesta, us.usuario, gru.nombre_grupo FROM respuestas as res
  INNER JOIN preguntas as pre ON pre.id_pregunta = res.id_pregunta 
  INNER JOIN categorias as cat ON cat.id_categoria = pre.id_categoria 
  INNER JOIN asignacion as asi ON asi.id_asignacion = res.id_asignacion
  INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asi.id_evaluacion
  INNER JOIN grupos as gru ON gru.id_grupo = asi.id_grupo
  INNER JOIN usuarios as us ON us.id_usuario = res.id_usuario WHERE";


$contador = 0;
$minrespuesta1 = 0;
$minrespuesta2 = 0;
$minrespuesta3 = 0;
$minrespuesta4 = 0;
$minrespuesta5 = 0;
$result =  $conn->query("SELECT id_evaluacion, nombre_evaluacion FROM evaluaciones ");


    while($obj = $result->fetch_object()){
     
      
      $resul2 =  $conn->query($query." ev.id_evaluacion = '$obj->id_evaluacion' AND res.respuesta = 'Muy de acuerdo' AND us.usuario = '$usuario'");
      $respuesta1 = $resul2->fetch_assoc();
      $respuestas1[$contador] = $respuesta1['countrespuesta'];
      $minrespuesta1 = $respuestas1[$contador];
     

      $resul2 =  $conn->query($query." ev.id_evaluacion = '$obj->id_evaluacion' AND res.respuesta = 'De acuerdo' AND us.usuario = '$usuario'");
      $respuesta2 = $resul2->fetch_assoc();
      $respuestas2[$contador] = $respuesta2['countrespuesta'];
      $minrespuesta2 = $respuestas2[$contador];
      

      $resul2 =  $conn->query($query." ev.id_evaluacion = '$obj->id_evaluacion' AND res.respuesta = 'Indeciso' AND us.usuario = '$usuario'");
      $respuesta3 = $resul2->fetch_assoc();
      $respuestas3[$contador] = $respuesta3['countrespuesta'];
      $minrespuesta3 = $respuestas3[$contador];

      $resul2 =  $conn->query($query." ev.id_evaluacion = '$obj->id_evaluacion' AND res.respuesta = 'En desacuerdo' AND us.usuario = '$usuario'");
      $respuesta4 = $resul2->fetch_assoc();
      $respuestas4[$contador] = $respuesta4['countrespuesta'];
      $minrespuesta4 = $respuestas4[$contador];

      $resul2 =  $conn->query($query." ev.id_evaluacion = '$obj->id_evaluacion' AND res.respuesta = 'Muy en desacuerdo' AND us.usuario = '$usuario'");
      $respuesta5 = $resul2->fetch_assoc();
      $respuestas5[$contador] = $respuesta5['countrespuesta'];
      $minrespuesta5 = $respuestas5[$contador];


        ?>
<div class="col-lg-6">
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><?php  echo $obj->nombre_evaluacion; ?> </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
        
if($minrespuesta1 != 0 || $minrespuesta2 != 0 || $minrespuesta3 != 0 || $minrespuesta4 != 0 || $minrespuesta5 != 0){
  
?>
                <canvas id="donutChart<?php echo $contador; ?>" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

                <table class="table table-bordered example1">
                  <thead>
                    <tr>
                      <th>Pregunta</th>
                      <th>Categoría</th>
                      <th>Respuesta</th>
                      <th>Estudiante</th>
                      <th>Grupo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                
$result3 =  $conn->query($querytabla." ev.id_evaluacion = '$obj->id_evaluacion' AND us.usuario = '$usuario'");

while($obj3 = $result3->fetch_object()){

?>
                    <tr>
                      <td><?php echo $obj3->pregunta ?></td>
                      <td><?php echo $obj3->nombre_categoria ?></td>
                      <td><?php echo $obj3->respuesta ?></td>
                      <td><?php echo $obj3->usuario ?></td>
                      <td><?php echo $obj3->nombre_grupo ?></td>
                    </tr>
                    <?php

}
?>
                  </tbody>
                </table>

                <?php

}else{
  echo "No hay respuestas";
}

?>
              </div>
              <!-- /.card-body -->
            </div>
            </div>


    <?php

    $contador++;
    }


?>


