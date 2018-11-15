<?php
	require_once('../php/vehiculo_modelo.php');
	$codigo = $_POST['codigo'];
	$vehiculo = new Vehiculo();
	$vehiculo->borrar($codigo);
?>