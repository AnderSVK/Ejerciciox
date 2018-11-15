<?php
	require_once('../php/notificaciones_modelo.php');
	$codigo = $_POST['codigo'];
	$notificacion = new Notificaciong();
	$notificacion->borrar($codigo);
?>