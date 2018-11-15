<?php
	require_once('../php/proceso_modelo.php');
	$codigo = $_POST['codigo'];
	$proceso = new Proceso();
	$proceso->borrar($codigo);
?>