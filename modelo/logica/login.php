<?php
session_start();
require('../../controlador/conexionBD/conexionBD.php');

$txtUsuario = $_POST['txtUsuario'];
$txtPass = $_POST['txtPass'];
$line = '';
$id_tipo = '';
$respuesta["resultado"] = '';

$result =  $conn->query("SELECT usuario, id_tipo FROM usuarios WHERE usuario = '$txtUsuario' AND pass = '$txtPass'");

    while($obj = $result->fetch_object()){

        $line =$obj->usuario;
        $id_tipo = $obj->id_tipo;
    }

   if ($line == ''){
    $respuesta["resultado"] = false;
   }else{
    $respuesta["resultado"] = true;
    $_SESSION['usuario'] = $txtUsuario;
    $_SESSION['id_tipo'] = $id_tipo;
    if ($id_tipo == 1) {
        $_SESSION['ubica'] = 'menu';
    }else{
        $_SESSION['ubica'] = 'aplicar';
    }
    
   }

   echo json_encode($respuesta);

?>