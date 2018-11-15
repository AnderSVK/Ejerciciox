<?php
	require_once('../php/administrador_modelo.php');
	$codigo = $_POST['codigo'];
	$administrador = new Administrador();
	$administrador->borrar($codigo);
?>