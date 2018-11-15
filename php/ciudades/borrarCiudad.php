<?php
	require_once('../php/ciudad_modelo.php');
	$codigo = $_POST['codigo'];
	$ciudad = new Ciudades();
	$ciudad->borrar($codigo);
?>