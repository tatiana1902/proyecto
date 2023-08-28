<?php

require('controlador/conexionBD/conexionBD.php');

$lineUsuario = '';
$line = '';
$usuario = $_SESSION['usuario'];
$usuarioAplicacion = '';
$segundaAsig = '';
$estadoAplicacion = '';
$aplicacionExistente = '';

$resultUser =  $conn->query("SELECT id_usuario  FROM usuarios WHERE usuario = '$usuario'");
$idUsuario = '';

while($obj1 = $resultUser->fetch_object()){

    $idUsuario =$obj1->id_usuario;

}

$result =  $conn->query("SELECT ev.nombre_evaluacion, asi.profesor, asi.id_asignacion, us.id_usuario FROM asignacion as asi 
INNER JOIN grupos as gr ON gr.id_grupo = asi.id_grupo
INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asi.id_evaluacion
LEFT JOIN usuarios as us ON us.id_grupo = gr.id_grupo WHERE us.id_usuario = '$idUsuario' AND asi.estado = 'Iniciada'");

$resultadoUsuario =  $conn->query("SELECT apl.id_usuario, apl.id_asignacion FROM aplicacion as apl WHERE apl.id_usuario = '$idUsuario'");
while($obj = $resultadoUsuario->fetch_object()){

    $lineUsuario =$obj->id_usuario;
    

}



while($obj = $result->fetch_object()){

    if($lineUsuario == ''){
    ?>
        <tr>
            <td><?php echo  $line =$obj->nombre_evaluacion; ?></td>
            <td><?php echo  $line =$obj->profesor; ?></td>
            <td><i class="fas fa-edit aplicarEvaluacion" id="<?php echo $line =$obj->id_asignacion; ?>" style="cursor: pointer;"></i></td>
        </tr>

    <?php
    }else{
    
        $usuarioAsignacion =$obj->id_usuario;
        
        $asignacion = $obj->id_asignacion;
        
        $resultAplicacion =  $conn->query("SELECT id_asignacion, id_usuario FROM aplicacion WHERE id_usuario = '$usuarioAsignacion' AND id_asignacion = '$asignacion'");
        
        while($obj2 = $resultAplicacion->fetch_object()){
            $aplicacionExistente =$obj2->id_asignacion;
        }
         
        if($aplicacionExistente == ''){
            
            ?>
                <tr>
                    <td><?php echo  $line =$obj->nombre_evaluacion; ?></td>
                    <td><?php echo  $line =$obj->profesor; ?></td>
                    <td><i class="fas fa-edit aplicarEvaluacion" id="<?php echo $line =$obj->id_asignacion; ?>" style="cursor: pointer;"></i></td>
                </tr>
        
            <?php
        }
    }
    $aplicacionExistente = '';
}

?>
