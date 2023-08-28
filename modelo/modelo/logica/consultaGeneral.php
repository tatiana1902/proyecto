<?php

require('controlador/conexionBD/conexionBD.php');

$line = '';
$usuario = $_SESSION['usuario'];
$result =  $conn->query("SELECT COUNT(*) as cantidad FROM usuarios WHERE id_tipo = 2 ");
$cantEstudiantes = $result->fetch_assoc();
$result =  $conn->query("SELECT COUNT(*) as cantidad FROM usuarios WHERE id_tipo = 1 ");
$cantProfesores = $result->fetch_assoc(); 
$result =  $conn->query("SELECT COUNT(*) as cantidad FROM evaluaciones ");
$cantEvaluaciones = $result->fetch_assoc();
$result =  $conn->query("SELECT COUNT(*) as cantidad FROM grupos ");
$cantGrupos = $result->fetch_assoc();
?>

