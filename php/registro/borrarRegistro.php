<?php
	require_once('../php/registro_modelo.php');
	$codigo = $_POST['codigo'];
	$registro = new Registro();
	$registro->borrar($codigo);
?>