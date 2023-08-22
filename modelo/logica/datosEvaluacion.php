<?php

require('controlador/conexionBD/conexionBD.php');
$id_asignacion = $_SESSION['id_asignacion'];
$usuario = $_SESSION['usuario'];
$line = '';
$nombre_evaluacion = '';
$nombre_grupo = '';


$result =  $conn->query("SELECT ev.nombre_evaluacion, gr.nombre_grupo FROM asignacion as asig 
INNER JOIN grupos as gr ON gr.id_grupo = asig.id_grupo
INNER JOIN evaluaciones as ev ON ev.id_evaluacion = asig.id_evaluacion
INNER JOIN aplicacion as ap ON ap.id_asignacion = asig.id_asignacion
INNER JOIN usuarios as us ON us.id_usuario = ap.id_usuario WHERE us.usuario = '$usuario'");

    while($obj = $result->fetch_object()){

        $nombre_evaluacion =$obj->nombre_evaluacion;
        $nombre_grupo =$obj->nombre_grupo;


    }

?>

