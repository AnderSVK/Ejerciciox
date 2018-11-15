<?php
	require_once('../php/notificaciones_modelo.php');
	
    $datos = $_POST;        
	$notificacion = new Notificacionu();
	$notificacion->editar($datos);
	
?>