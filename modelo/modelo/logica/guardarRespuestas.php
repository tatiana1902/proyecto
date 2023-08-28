<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$respuesta["resultado"] = false;
$id_asignacion = $_SESSION['id_asignacion'];
$usuario = $_SESSION['usuario'];

$result =  $conn->query("SELECT id_usuario  FROM usuarios WHERE usuario = '$usuario'");
$idUsuario = '';

while($obj = $result->fetch_object()){

    $idUsuario =$obj->id_usuario;

}

for ($i=0; $i < count($_POST['cmbRespuesta']) ; $i++) { 
    $respuestaeva = $_POST['cmbRespuesta'][$i];
    if ($respuestaeva == ''){
        $respuestaeva = 'NO RESPONDE';
    }
    $id_pregunta = $_POST['idPregunta'][$i];
    $insert = "INSERT INTO respuestas (id_respuesta, respuesta, id_pregunta, id_asignacion, id_usuario) VALUES (NULL, '$respuestaeva', '$id_pregunta' , '$id_asignacion', $idUsuario)";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
}

$insert = "UPDATE aplicacion SET estado = 'Terminada' WHERE id_asignacion = '$id_asignacion' AND id_usuario = '$idUsuario'";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }

   $_SESSION['ubica'] = 'aplicar';
   echo json_encode($respuesta);

?>