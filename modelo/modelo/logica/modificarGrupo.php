<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$txtNombreGrupo = $_POST['txtNombreGrupo'];
$idGrupo = $_POST['idGrupo'];
$line = '';
$idGrBD = '';
$respuesta["resultado"] = '';

$result =  $conn->query("SELECT nombre_grupo, id_grupo  FROM grupos WHERE nombre_grupo = '$txtNombreGrupo'");

    while($obj = $result->fetch_object()){

        $line =$obj->nombre_grupo;
        $idGrBD =$obj->id_grupo;

    }

   if ($line == '' || $idGrBD == $idGrupo){
    $insert = "UPDATE grupos SET nombre_grupo = '$txtNombreGrupo' WHERE id_grupo = '$idGrupo'";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
   }else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>