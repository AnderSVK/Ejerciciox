<?php
	require_once('../php/notificacion_modelo.php');
	
    $datos = $_POST;        
	$notificacion = new Notificacion();
	$notificacion->editar($datos);
	
?>