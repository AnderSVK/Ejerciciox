<?php
	require_once('../php/unidad_modelo.php');
	$codigo = $_POST['codigo'];
	$unidad = new Unidades();
	$unidad->borrar($codigo);
?>