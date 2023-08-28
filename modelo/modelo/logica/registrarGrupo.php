<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$txtNombreGrupo = $_POST['txtNombreGrupo'];
$line = '';
$respuesta["resultado"] = '';

$result =  $conn->query("SELECT nombre_grupo FROM grupos WHERE nombre_grupo = '$txtNombreGrupo'");

    while($obj = $result->fetch_object()){

        $line =$obj->nombre_grupo;

    }

   if ($line == ''){
    $insert = "INSERT INTO grupos (id_grupo, nombre_grupo) VALUES (NULL, '$txtNombreGrupo')";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
   }else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>