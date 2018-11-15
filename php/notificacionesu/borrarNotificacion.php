<?php
	require_once('../php/notificaciones_modelo.php');
	$codigo = $_POST['codigo'];
	$notificacion = new Notificacionu();
	$notificacion->borrar($codigo);
?>