<?php
session_start();

if($_POST['cmbEstudiantes'] != ""){
    $_SESSION['estudiante'] = $_POST['cmbEstudiantes'];
}else{
    
    if(isset($_SESSION['estudiante'])){
        unset($_SESSION['estudiante']);
    } 
}

if($_POST['cmbGrupos'] != ""){
    $_SESSION['grupos'] = $_POST['cmbGrupos'];
}else{
    if(isset($_SESSION['grupos'])){
        unset($_SESSION['grupos']);
    } 
}


$respuesta["resultado"] = false;

   echo json_encode($respuesta);
?>