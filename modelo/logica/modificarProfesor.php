<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$txtUsuario = $_POST['txtUsuario'];
$txtPass = $_POST['txtPass'];
$idUsuario = $_POST['idUsuario'];
$cmbGrupo = $_POST['cmbGrupo'];
$line = '';
$idUsBD = '';
$respuesta["resultado"] = '';

$result =  $conn->query("SELECT usuario, id_usuario  FROM usuarios WHERE usuario = '$txtUsuario'");

    while($obj = $result->fetch_object()){

        $line =$obj->usuario;
        $idUsBD =$obj->id_usuario;

    }

   if ($line == '' || $idUsBD == $idUsuario){
    $insert = "UPDATE usuarios SET usuario = '$txtUsuario', pass = '$txtPass', id_grupo = '$cmbGrupo' WHERE id_usuario = '$idUsuario'";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
   }else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>