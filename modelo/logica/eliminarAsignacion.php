<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');


$idAsignacion = $_POST['idAsignacion'];



    $insert = "DELETE  FROM asignacion WHERE id_asignacion = '$idAsignacion'";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
    else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>