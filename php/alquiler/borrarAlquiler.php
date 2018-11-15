<?php
	require_once('../php/alquiler_modelo.php');
	$codigo = $_POST['codigo'];
	$alquiler = new Alquiler();
	$alquiler->borrar($codigo);
?>