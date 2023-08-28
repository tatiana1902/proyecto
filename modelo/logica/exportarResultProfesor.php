<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Respuestas_PC_" . date('d:m:Y').".xls");
?>

<table border="1">
    <tr>
        <th>Nombre Evaluación</th>
        <th>Categoría</th>
        <th>Pregunta</th>
        <th>Respuesta</th>
        <th>Usuario</th>
        <th>Grupo</th>
    </tr>
    <?php
        require('controlador/conexionBD/conexionBD.php');

        $line = '';
        $usuario = $_SESSION['usuario'];
        
        $result =  $conn->query("SELECT ev.nombre_evaluacion, cat.nombre_categoria, pre.pregunta, res.respuesta, us.usuario, gru.nombre_grupo, asi.profesor FROM respuestas as res
        INNER JOIN preguntas as pre ON pre.id_pregunta = res.id_pregunta 
        INNER JOIN categorias as cat ON cat.id_categoria = pre.id_categoria
        INNER JOIN usuarios as us ON us.id_usuario = res.id_usuario 
        INNER JOIN asignacion as asi ON asi.id_asignacion = res.id_asignacion
        INNER JOIN grupos as gru ON gru.id_grupo = asi.id_grupo
        INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asi.id_evaluacion");

        while($obj = $result->fetch_object()){
       
        
            if($obj->profesor == $usuario){
        
    ?>

                <tr>
                <td><?php echo  $line =$obj->nombre_evaluacion; ?></td>
                <td><?php echo  $line =$obj->nombre_categoria; ?></td>
                <td><?php echo  $line =$obj->pregunta; ?></td>
                <td><?php echo  $line =$obj->respuesta; ?></td>
                <td><?php echo  $line =$obj->usuario; ?></td>
                <td><?php echo  $line =$obj->nombre_grupo; ?></td>
              </tr>


    <?php
 
            }else if($obj->usuario == $usuario){
    ?>
                <tr>
                <td><?php echo  $line =$obj->nombre_evaluacion; ?></td>
                <td><?php echo  $line =$obj->nombre_categoria; ?></td>
                <td><?php echo  $line =$obj->pregunta; ?></td>
                <td><?php echo  $line =$obj->respuesta; ?></td>
                <td><?php echo  $line =$obj->usuario; ?></td>
                <td><?php echo  $line =$obj->nombre_grupo; ?></td>
              </tr>
        <?php   
        } 
}
                  
?>

</table>

<?php
    $_SESSION['ubica'] = 'aplicar';
?>