<?php
	require_once('../php/notificaciones_modelo.php');
		
	$datos = array(
	'noti_codi'=>$_POST['noti_codi'],
	'noti_nomb'=>$_POST['noti_nomb'],
	'apar_codi'=>$_POST['apar_codi']
	);
	
	$notificacion = new Notificaciong();
	$notificacion->nuevo($datos);
	
?>