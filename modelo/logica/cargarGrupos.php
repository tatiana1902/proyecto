<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';


$result =  $conn->query("SELECT id_grupo, nombre_grupo FROM grupos ");

    while($obj = $result->fetch_object()){

        ?>

                    <tr>
                    <td><i class="fas fa-edit editarGrupo" id="<?php echo $line =$obj->id_grupo; ?>" data-nombre="<?php echo  $line =$obj->nombre_grupo; ?>" style="cursor: pointer;"></i></td>
                    <td><?php echo  $line =$obj->nombre_grupo; ?></td>

                  </tr>


        <?php


    }


?>

