<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';


$result =  $conn->query("SELECT us.id_usuario, us.usuario, gr.nombre_grupo FROM usuarios as us INNER JOIN grupos as gr ON gr.id_grupo = us.id_grupo WHERE us.id_tipo = 1");

    while($obj = $result->fetch_object()){

        ?>

                <tr>
                    <td><i class="fas fa-edit ediarProfesor" id="<?php echo $line =$obj->id_usuario; ?>" data-nombre="<?php echo  $line =$obj->usuario; ?>" style="cursor: pointer;"></i></td>
                    <td><?php echo  $line =$obj->usuario; ?></td>
                    <td><?php echo  $line =$obj->nombre_grupo; ?></td>
                    <td><i class="fas fa-trash eliminarProfesor" id="<?php echo $line =$obj->id_usuario; ?>" data-nombre="<?php echo  $line =$obj->usuario; ?>" style="cursor: pointer;"></i></td>
                </tr>


        <?php


    }


?>

