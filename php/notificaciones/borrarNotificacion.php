<?php
	require_once('../php/notificacion_modelo.php');
	$codigo = $_POST['codigo'];
	$notificacion = new Notificacion();
	$notificacion->borrar($codigo);
?>