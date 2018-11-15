<?php
	require_once('../php/notificaciones_modelo.php');
	
    $datos = $_POST;        
	$notificacion = new Notificaciong();
	$notificacion->editar($datos);
	
?>