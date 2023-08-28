<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');


$idUsuario = $_POST['idUsuario'];



    $insert = "DELETE  FROM usuarios WHERE id_usuario = '$idUsuario'";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
    else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>