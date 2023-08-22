<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';

$contadorAplicaciones = 0;
$cantUsuario = 0;

$resultAsignacion =  $conn->query("SELECT asi.id_grupo, asi.id_asignacion, asi.estado FROM asignacion as asi 
INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asi.id_evaluacion WHERE ev.id_evaluacion = '$evaluacion' AND asi.estado = 'Iniciada'");

while($obj1 = $resultAsignacion->fetch_object()){

    $usuarios =  $conn->query("SELECT COUNT(id_usuario) as numUsuarios  FROM usuarios WHERE id_grupo = '$obj1->id_grupo' AND id_tipo ='2'");
    $obj2 = $usuarios->fetch_object();
    $cantUsuario= $obj2->numUsuarios;

    $totalUsuarios =  $conn->query("SELECT id_usuario  FROM usuarios WHERE id_grupo = '$obj1->id_grupo'");


    while($obj3 = $totalUsuarios->fetch_object()){

        $idUsuario =$obj3->id_usuario;
        $aplicaciones =  $conn->query("SELECT id_aplicacion FROM aplicacion WHERE id_usuario = '$idUsuario' AND id_asignacion = '$obj1->id_asignacion'");
        $obj4 = $aplicaciones->fetch_object();
        
        if(!empty($obj4)){
            
            $contadorAplicaciones= $contadorAplicaciones+1;

        }
    }
    
    if($cantUsuario == $contadorAplicaciones){
        $insert = "UPDATE asignacion SET estado = 'Terminada' WHERE id_asignacion = '$obj1->id_asignacion' AND id_grupo = '$obj1->id_grupo' AND estado = 'Iniciada'";
        mysqli_query($conn, $insert);
        
    }
    $contadorAplicaciones=0;

}

$result =  $conn->query("SELECT gr.nombre_grupo, asi.profesor, asi.id_asignacion, asi.fecha, asi.estado FROM asignacion as asi 
INNER JOIN grupos as gr ON gr.id_grupo = asi.id_grupo
INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asi.id_evaluacion WHERE ev.id_evaluacion = '$evaluacion'");

    while($obj = $result->fetch_object()){

        ?>

                    <tr>
                    <td><?php echo  $line =$obj->nombre_grupo; ?></td>
                    <td><?php echo  $line =$obj->profesor; ?></td>
                    <td><?php echo  $line =$obj->fecha; ?></td>
                    <td><?php echo  $line =$obj->estado; ?></td>
                  </tr>


        <?php


    }


?>

