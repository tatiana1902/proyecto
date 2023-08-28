<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';


$result =  $conn->query("SELECT id_grupo, nombre_grupo FROM grupos ");

    while($obj = $result->fetch_object()){

        ?>
        <option value="<?php echo $line =$obj->id_grupo; ?>">
        <?php echo  $line =$obj->nombre_grupo; ?>
        </option>

                
        <?php


    }


?>

