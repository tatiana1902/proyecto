<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$txtUsuario = $_POST['txtUsuario'];
$txtPass = $_POST['txtPass'];
$cmbGrupo = $_POST['cmbGrupo'];

$line = '';
$respuesta["resultado"] = '';

$result =  $conn->query("SELECT usuario FROM usuarios WHERE usuario = '$txtUsuario'");

    while($obj = $result->fetch_object()){

        $line =$obj->usuario;

    }

   if ($line == ''){
    $insert = "INSERT INTO usuarios (id_usuario, usuario, pass, id_tipo, id_grupo) VALUES (NULL, '$txtUsuario', '$txtPass', 2, '$cmbGrupo')";
    if (mysqli_query($conn, $insert)) {
        $respuesta["resultado"] = false;
    }
   }else{
    $respuesta["resultado"] = true;
   }

   echo json_encode($respuesta);

?>