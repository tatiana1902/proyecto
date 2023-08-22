<?php
session_start();
$_SESSION['ubica'] = 'mievaluacion';
$usuario = $_SESSION['usuario'];
require('../../controlador/conexionBD/conexionBD.php');

$id_asignacion = $_POST['id_asignacion'];
$_SESSION['id_asignacion'] = $id_asignacion;
$result =  $conn->query("SELECT id_usuario  FROM usuarios WHERE usuario = '$usuario'");
$idUsuario = '';
$fecha = date('Y-m-d');

    while($obj = $result->fetch_object()){

        $idUsuario =$obj->id_usuario;

    }

   if ($idUsuario != ''){
    $insert = "INSERT INTO aplicacion (id_aplicacion, id_usuario, id_asignacion, fecha_aplicacion, estado) VALUES(NULL, '$idUsuario', '$id_asignacion', '$fecha', 'Iniciada')";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
   }else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>
