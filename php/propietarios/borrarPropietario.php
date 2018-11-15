<?php
	require_once('../php/propietario_modelo.php');
	$codigo = $_POST['codigo'];
	$propietario = new Propietario();
	$propietario->borrar($codigo);
?>