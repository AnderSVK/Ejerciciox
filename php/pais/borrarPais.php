<?php
	require_once('../php/pais_modelo.php');
	$codigo = $_POST['codigo'];
	$pais = new Pais();
	$pais->borrar($codigo);
?>