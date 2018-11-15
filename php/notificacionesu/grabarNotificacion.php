<?php
	require_once('../php/notificaciones_modelo.php');
		
	$datos = array(
	'noti_codi'=>$_POST['noti_codi'],
	'noti_nomb'=>$_POST['noti_nomb'],
	'uni_codi'=>$_POST['uni_codi']
	);
	
	$notificacion = new Notificacionu();
	$notificacion->nuevo($datos);
	
?>