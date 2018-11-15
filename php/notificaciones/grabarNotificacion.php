<?php
	require_once('../php/notificacion_modelo.php');
		
	$datos = array(
	'noti_codi'=>$_POST['noti_codi'],
	'noti_nomb'=>$_POST['noti_nomb'],
	'inqui_codi'=>$_POST['inqui_codi']
	);
	
	$notificacion = new Notificacion();
	$notificacion->nuevo($datos);
	
?>