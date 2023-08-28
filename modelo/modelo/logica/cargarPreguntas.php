<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';


$result =  $conn->query("SELECT pre.pregunta, pre.porcentaje, cat.nombre_categoria, ev.nombre_evaluacion FROM preguntas as pre 
INNER JOIN categorias as cat ON cat.id_categoria = pre.id_categoria
INNER JOIN evaluaciones as ev ON ev.id_evaluacion = pre.id_evaluacion WHERE ev.id_evaluacion = '$evaluacion'");

    while($obj = $result->fetch_object()){

        ?>

                    <tr>
                    <td><?php echo  $line =$obj->pregunta; ?></td>
                    <td><?php echo  $line =$obj->nombre_categoria; ?></td>
                    <td><?php echo  $line =$obj->nombre_evaluacion; ?></td>
                  </tr>


        <?php


    }


?>

