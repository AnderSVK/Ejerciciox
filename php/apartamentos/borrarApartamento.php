<?php
	require_once('../php/apartamento_modelo.php');
	$codigo = $_POST['codigo'];
	$apartamentos = new Apartamentos();
	$apartamentos->borrar($codigo);
?>