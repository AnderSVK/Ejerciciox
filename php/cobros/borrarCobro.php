<?php
	require_once('../php/cobro_modelo.php');
	$codigo = $_POST['codigo'];
	$cobro = new Cobro();
	$cobro->borrar($codigo);
?>