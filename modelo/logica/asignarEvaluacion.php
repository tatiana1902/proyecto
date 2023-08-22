<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$cmbGrupo = $_POST['cmbGrupo'];
$profesor = $_SESSION['usuario'];
$evaluacion = $_POST['evaluacion'];
$line = '';
$respuesta["resultado"] = '';
$fecha = date('Y-m-d');
$estado = 'Iniciada';

$result =  $conn->query("SELECT asi.id_grupo FROM asignacion as asi WHERE asi.id_grupo = '$cmbGrupo' AND asi.id_evaluacion = '$evaluacion' AND asi.estado = 'Iniciada'");

    while($obj = $result->fetch_object()){

        $line =$obj->id_grupo;

    }

   if ($line == ''){
    $insert = "INSERT INTO asignacion (id_asignacion, id_grupo, id_evaluacion, profesor, fecha, estado) VALUES (NULL, '$cmbGrupo', '$evaluacion', '$profesor', '$fecha', '$estado')";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
   }else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>