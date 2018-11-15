<?php
	require_once('../php/presupuesto_modelo.php');
	$codigo = $_POST['codigo'];
	$presupuesto = new Presupuesto();
	$presupuesto->borrar($codigo);
?>