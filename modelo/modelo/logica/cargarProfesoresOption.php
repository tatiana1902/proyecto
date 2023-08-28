<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';


$result =  $conn->query("SELECT id_usuario, usuario FROM usuarios WHERE id_tipo = 1 ");

    while($obj = $result->fetch_object()){

        ?>
        <option value="<?php echo $line =$obj->id_usuario; ?>">
        <?php echo  $line =$obj->usuario; ?>
        </option>

                
        <?php


    }


?>

