<?php
	require_once('../php/roles_modelo.php');
	$codigo = $_POST['codigo'];
	$rol = new Roles();
	$rol->borrar($codigo);
?>