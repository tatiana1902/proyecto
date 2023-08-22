<?php
session_start();
if(isset($_SESSION['ubica'])){

	switch ($_SESSION['ubica']) {
		case 'menu':
			require('vista/menu/index.php');
		break;

		case 'menuEstudiante':
			require('vista/menu/estadisticasEstudiante.php');
		break;

		case 'profesores':
			require('vista/menu/profesores.php');
		break;

		case 'estudiantes':
			require('vista/menu/estudiantes.php');
		break;

		case 'grupos':
			require('vista/menu/grupos.php');
		break;

		case 'evaluaciones':
			require('vista/menu/evaluaciones.php');
		break;

		case 'aplicar':
			require('vista/menu/aplicar.php');
		break;

		case 'evaluacionesAsignadas':
			require('vista/menu/evaluacionesAsignadas.php');
		break;

		case 'mievaluacion':
			require('vista/menu/mievaluacion.php');
		break;

		case 'registro':
			require('vista/registro/index.php');
		break;
		
		default:
		require('vista/login/index.php');
			break;
	}

}else{
    require('vista/login/index.php');
}




?>