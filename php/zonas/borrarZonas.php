<?php
	require_once('../php/zonas_modelo.php');
	$codigo = $_POST['codigo'];
	$zonas = new Zonas();
	$zonas->borrar($codigo);
?>